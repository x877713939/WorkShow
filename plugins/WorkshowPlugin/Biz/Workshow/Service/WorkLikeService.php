<?php


namespace WorkshowPlugin\Biz\Workshow\Service;


interface WorkLikeService
{
public function countWorkLike($workid);
public function pageData($pages, $page);
}