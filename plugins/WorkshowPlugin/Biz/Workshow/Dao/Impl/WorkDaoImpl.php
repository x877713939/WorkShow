<?php


namespace WorkshowPlugin\Biz\Workshow\Dao\Impl;


use Codeages\Biz\Framework\Dao\GeneralDaoImpl;
use WorkshowPlugin\Biz\Workshow\Dao\WorkDao;

class WorkDaoImpl extends GeneralDaoImpl implements WorkDao
{
    protected $table = 'plugin_work';
    public function declares()
    {
        // TODO: Implement declares() method.
        return array([
            'serializes'=>array(),
            'timestamps'=>array(),
            'orderbys'=>array(),
            'conditions'=>array([
                'title= :title',
                'status= :status',
                'type= :type',
                'title like :title_like'
            ]),
        ]);
    }

    public function addWork($data){
        return $this->create(['article'=>$data['article'],'title'=>$data['title'],'cover'=>$data['cover'],'status'=>$data['status'],'user_id'=>$data['user_id'],'type'=>$data['type']]);
    }
}