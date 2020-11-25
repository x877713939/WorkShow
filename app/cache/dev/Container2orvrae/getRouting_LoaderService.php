<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

$a = new \Symfony\Component\Config\Loader\LoaderResolver();

$b = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : ($this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[2].'/Resources'), [0 => $this->targetDirs[2]]))) && false ?: '_'};
$c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});

$a->addLoader(${($_ = isset($this->services['routing.loader.yml']) ? $this->services['routing.loader.yml'] : $this->load('getRouting_Loader_YmlService.php')) && false ?: '_'});
$a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$a->addLoader(${($_ = isset($this->services['sensio_framework_extra.routing.loader.annot_class']) ? $this->services['sensio_framework_extra.routing.loader.annot_class'] : $this->load('getSensioFrameworkExtra_Routing_Loader_AnnotClassService.php')) && false ?: '_'});
$a->addLoader(${($_ = isset($this->services['sensio_framework_extra.routing.loader.annot_dir']) ? $this->services['sensio_framework_extra.routing.loader.annot_dir'] : $this->load('getSensioFrameworkExtra_Routing_Loader_AnnotDirService.php')) && false ?: '_'});
$a->addLoader(${($_ = isset($this->services['sensio_framework_extra.routing.loader.annot_file']) ? $this->services['sensio_framework_extra.routing.loader.annot_file'] : $this->load('getSensioFrameworkExtra_Routing_Loader_AnnotFileService.php')) && false ?: '_'});
$a->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader(${($_ = isset($this->services['assetic.asset_manager']) ? $this->services['assetic.asset_manager'] : $this->load('getAssetic_AssetManagerService.php')) && false ?: '_'}, []));
$a->addLoader($c);
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, $a);
