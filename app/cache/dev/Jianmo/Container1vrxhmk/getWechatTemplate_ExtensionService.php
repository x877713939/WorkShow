<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'wechat_template.extension' shared service.

$this->services['wechat_template.extension'] = $instance = new \AppBundle\Extension\WeChatTemplateExtension();

$instance->setBiz(${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});

return $instance;
