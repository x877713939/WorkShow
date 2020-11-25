<?php


namespace WorkshowPlugin\Biz\Workshow\Service\Impl;


use Biz\BaseService;
use WorkshowPlugin\Biz\Workshow\Service\CreateWorkService;

class CreateWorkServiceImpl extends BaseService implements CreateWorkService
{
    public function getWorkDao(){
        return $this->createDao('WorkshowPlugin:Workshow:WorkDao');
    }

    public function createWork($data){
        $result = $this->getWorkDao()->addWork($data);
        if ($result){
            return true;
        }else{
            return false;
        }
    }
}