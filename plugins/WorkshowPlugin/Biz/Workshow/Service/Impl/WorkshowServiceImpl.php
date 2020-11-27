<?php

namespace WorkshowPlugin\Biz\Workshow\Service\Impl;

/**
 * EduSoho系统可引用以下BaseService
 * Biz\BaseService
 */

use Codeages\Biz\Framework\Service\BaseService;
use WorkshowPlugin\Biz\Workshow\Service\WorkshowService;

class WorkshowServiceImpl extends BaseService implements WorkshowService
{
    //按类型显示work的逻辑实现
    public function showWorkType($type,$orderby,$start,$limt)
    {
        // TODO: Implement findWorkType() method.
        return $this->getWorkshowDao()->findWorksByType($type,$orderby,$start,$limt);
    }

    public function countWork($type)
    {
        // TODO: Implement countWork() method.
        return $this->getWorkshowDao()->countworks($type);
    }

    protected function getWorkshowDao()
    {
        return $this->biz->dao('WorkshowPlugin:Workshow:WorkshowDao');
    }

}