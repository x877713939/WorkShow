<?php

use Pimple\Psr11\Container as PsrContainer;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\HttpFoundation\Request;

date_default_timezone_set('Asia/Shanghai');

$loader = require __DIR__.'/../vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$loader, 'loadClass']);

if (file_exists(__DIR__.'/../app/config/plumber.php')) {
    $options = include __DIR__.'/../app/config/plumber.php';
}

$input = new ArgvInput();
$env = $input->getParameterOption(['--env', '-e'], getenv('SYMFONY_ENV') ?: 'dev');

$request = Request::createFromGlobals();

$kernel = new AppKernel($env, true);
$kernel->setRequest($request);
$kernel->boot();

$container = $kernel->getContainer();

$biz = $container->get('biz');
$biz['biz'] = $biz;

$plumberQueueOptions = $container->getParameter('plumber_queues_options');
$defaultQueueOptions = [
    'type' => 'beanstalk',
    'host' => '127.0.0.1',
    'port' => 11300,
    'password' => '',
    'persistent' => true,
    'timeout' => 2,
    'socket_timeout' => 20,
    'logger' => null,
];

$options['rate_limits'] = $container->hasParameter('plumber_worker_rate_limits') ? $container->getParameter('plumber_worker_rate_limits') : null;
$options['hour_limits'] = $container->hasParameter('plumber_worker_hour_limits') ? $container->getParameter('plumber_worker_hour_limits') : null;

foreach ($options['queues'] as &$queue) {
    if (!isset($queue['queue_options'])) {
        throw new InvalidArgumentException('queue_options not exist');
    }

    if (empty($plumberQueueOptions[$queue['queue_options']])) {
        $queue = array_merge($queue, $defaultQueueOptions);
    } else {
        $queue = array_merge($queue, $plumberQueueOptions[$queue['queue_options']]);
    }

    unset($queue['queue_options']);
}

return [
    'options' => $options,
    'container' => new PsrContainer($biz),
];
