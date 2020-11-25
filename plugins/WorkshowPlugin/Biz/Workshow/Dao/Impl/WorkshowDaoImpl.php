<?php

namespace WorkshowPlugin\Biz\Workshow\Dao\Impl;

use Codeages\Biz\Framework\Dao\GeneralDaoImpl;
use WorkshowPlugin\Biz\Workshow\Dao\WorkshowDao;

class WorkshowDaoImpl extends GeneralDaoImpl implements WorkshowDao
{
    protected $table = 'work';
    public function findWorkByType($type)
    {
        // TODO: Implement findWorkByType() method.
        $sql = "SELECT * FROM `work` WHERE `type`='$type'";
        $sql = $this->sql($sql, [], [], []);
        return $this->db()->fetchAll($sql);
    }
}