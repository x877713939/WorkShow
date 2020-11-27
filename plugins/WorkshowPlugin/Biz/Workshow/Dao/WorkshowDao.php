<?php

namespace WorkshowPlugin\Biz\Workshow\Dao;

interface WorkshowDao
{
    public function findWorksByType($type,$orderby,$start,$limt);
    public function countworks($type);
}