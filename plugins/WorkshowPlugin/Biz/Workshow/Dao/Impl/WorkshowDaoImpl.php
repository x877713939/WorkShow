<?php

namespace WorkshowPlugin\Biz\Workshow\Dao\Impl;

use Codeages\Biz\Framework\Dao\GeneralDaoImpl;
use WorkshowPlugin\Biz\Workshow\Dao\WorkshowDao;

class WorkshowDaoImpl extends GeneralDaoImpl implements WorkshowDao
{
    //按类型查找work
    protected $table = 'plugin_work';

    public function findWorksByType($type,$orderby,$start,$limt)
    {
        $status = 'published';
        if ($type == '全部') {
            $type = null;
        }
        // TODO: Implement findWorksByType() method.
        return $this->search(['type' => $type, 'status' => $status], [], $start, $limt);
    }

    //查找所有的作品
//    public function findWorks()
//    {
//        // TODO: Implement findWorks() method.
//        $status = 'published';
//        return $this->search(['status' => $status], [], 0, PHP_INT_MAX);
//    }

    //统计一个类型的作品的数量
    public function countworks($type)
    {
        return $this->count(['type' => $type]);
    }

    public function declares()
    {
        return array(
            'timestamps' => array('created_time', 'update_time'),
            'serializes' => array(),
            'orderbys' => array(),
            'conditions' => array(
                'type = :type',
                'status = :status',
            ),
        );
    }
}