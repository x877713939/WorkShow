<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'callback.extension' shared service.

$this->services['callback.extension'] = $instance = new \AppBundle\Extension\CallbackExtension();

$instance->setBiz(${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});

return $instance;
