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
    protected function getWorkshowDao()
    {
        return $this->createDao('WorkshowPlugin:Workshow:WorkshowDao');
    }
}