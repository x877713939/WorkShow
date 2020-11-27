<?php
namespace WorkshowPlugin\Biz\Workshow\Service;

interface WorkshowService
{
public function showWorkType($type,$orderby,$start,$limt);
public function countWork($type);
}