<?php

namespace WorkshowPlugin\Biz\Workshow\Dao\Impl;

use Codeages\Biz\Framework\Dao\GeneralDaoImpl;
use WorkshowPlugin\Biz\Workshow\Dao\WorkshowDao;

class WorkshowDaoImpl extends GeneralDaoImpl implements WorkshowDao
{
    protected $table = 'plugin_work';
    public function getWorkByID($workid)
    {
        return $this->getByFields(['id'=>$workid]);
        // TODO: Implement getWorkByID() method.
    }
    public function getRecommend($type)
    {
        return $this->search(['type' => $type],['visit' => 'desc'],0,5);
        // TODO: Implement getRecommend() method.
    }
    public function increase($workid, $count)
    {
        $this->update(['id'=> $workid],['visit'=>$count]);
        // TODO: Implement increase() method.
    }

    public function declares()
    {
        return array(
            'timestamps' => array(),
            'serializes' => array(),
            'orderbys' => array(
                'visit',
            ),
            'conditions' => array(
                'id = :id',
                'type = :type',
            ),
        );
    }
}