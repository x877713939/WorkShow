<?php


namespace WorkshowPlugin\Biz\Workshow\Service\Impl;


use WorkshowPlugin\Biz\Workshow\Service\WorkLikeService;
use Codeages\Biz\Framework\Service\BaseService;

class WorkLikeServiceImpl extends BaseService implements WorkLikeService
{
    public function countWorkLike($workid){

        $data = $this->getWorkLikeDao()->countLikeNum($workid);
        return count($data);
    }
    public function pageData($pages, $page)
    {
        //获取分页数据；
        $page_start = ($page - 1) * 15; //数据开始位置
        $page_num = ceil(($pages / 15)); //页数向上取整获取的页数
        $pages_end = $pages % 15; //获得最后一页数据条数
        $page_end = $page_start + 15; //数据结束位置
        if ($page >= $page_num) {
            $page = $page_num;
            $page_start = ($page - 1) * 15;
            $page_end = $page_start + 15;
            $pages_end = $pages % 15;
            if ($pages_end != 0) {
                $page_end = $page_start + $pages_end;
            } else {
                $page_end = $page_start + 15;
            }
        }
        return ["page_start" => $page_start, "page_end" => $page_end, "page_num" => $page_num];
    }


    protected function getWorkLikeDao(){
        return $this->biz->dao('WorkshowPlugin:Workshow:WorkLikeDao');
    }
}