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

    public function gallery($workid){
        $data = $this->getWorkshowDao()->getWorkById($workid);
        $count = $data['visit'];
        $count = $count + 1;
        $this->getWorkshowDao()->increase($workid,$count);
        $user = $this->getUserDao()->getUserById($data['user_id']);
        $data[0] = $data;
        $data[1] = $user;
        return $data;
    }
    public function rcm($type)
    {
        $data = $this->getWorkshowDao()->getRecommend($type);
        return $data;
    }


    protected function getWorkshowDao()
    {
        return $this->biz->dao('WorkshowPlugin:Workshow:WorkshowDao');
    }
    protected function getUserDao()
    {
        return $this->biz->dao('WorkshowPlugin:Workshow:UserDao');
    }
}