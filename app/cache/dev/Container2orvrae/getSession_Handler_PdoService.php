<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'session.handler.pdo' shared service.

return $this->services['session.handler.pdo'] = new \Codeages\Biz\Framework\Session\Handler\BizSessionHandler(${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
