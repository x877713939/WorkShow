<?php

namespace WorkshowPlugin\Biz\Workshow\Dao\Impl;

use Codeages\Biz\Framework\Dao\GeneralDaoImpl;
use WorkshowPlugin\Biz\Workshow\Dao\UserDao;

class UserDaoImpl extends GeneralDaoImpl implements UserDao
{
    protected $table = 'user';

    public function getUserById($user_id)
    {
        $data = $this->getByFields(['id'=>$user_id]);
        return $data;
        // TODO: Implement getUserById() method.
    }

    public function declares()
    {
        return array(
            'timestamps' => array(),
            'serializes' => array(),
            'orderbys' => array(),
            'conditions' => array(
                'id = :id',
            ),
        );
    }
}