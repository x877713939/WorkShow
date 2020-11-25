<?php

namespace WorkshowPlugin\Biz\Workshow\Dao;

interface WorkshowDao
{
    public function getWorkByID($workid);
    public function getRecommend($type);
    public function increase($workid,$count);
}