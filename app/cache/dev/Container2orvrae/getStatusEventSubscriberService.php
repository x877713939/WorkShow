<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'status_event_subscriber' shared service.

return $this->services['status_event_subscriber'] = new \Biz\User\Event\StatusEventSubscriber(${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
