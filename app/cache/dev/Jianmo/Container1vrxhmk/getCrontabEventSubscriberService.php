<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'crontab_event_subscriber' shared service.

return $this->services['crontab_event_subscriber'] = new \Biz\Crontab\Event\CrontabSubscriber(${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
