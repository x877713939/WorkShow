<?php


namespace WorkshowPlugin\Biz\Workshow\Dao\Impl;

use Codeages\Biz\Framework\Dao\GeneralDaoImpl;
use WorkshowPlugin\Biz\Workshow\Dao\WorkLikeDao;

class WorkLikeDaoImpl extends GeneralDaoImpl implements WorkLikeDao
{
    protected $table = 'plugin_like';
    public function countLikeNum($workid){
        return $this->search(['work_id'=>$workid],[],0,PHP_INT_MAX);
    }
    public function declares()
    {
        return array(
            'timestamps' => array('created_time', 'update_time'),
            'serializes' => array(),
            'orderbys' => array(),
            'conditions' => array(
                'work_id = :work_id',
            ),
        );
    }
}