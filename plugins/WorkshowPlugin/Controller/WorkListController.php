<?php


namespace WorkshowPlugin\Controller;

use AppBundle\Common\Paginator;
use AppBundle\Controller\BaseController;

use Symfony\Component\HttpFoundation\Request;

class WorkListController extends BaseController
{

//获取所有work及分类的控制器
    public function indexAction(Request $request)
    {
        $type = $request->query->get('type')?$request->query->get('type'):'全部';
        $page=$request->query->get('page')?$request->query->get('page'):1;
        //获得对应类型的作品数量
        $workCount = $this->getWorkshowService()->countWork($type);
        $pagein = new Paginator($request,$workCount,15);
        $pagein->setCurrentPage($page);
        //获取当前页对应类型的作品列表
        $datas = $this->getWorkshowService()->showWorkType($type,[],$start=$pagein->getOffsetCount()>=$pagein->getPerPageCount()?$pagein->getPerPageCount():$pagein->getOffsetCount(),$pagein->getPerPageCount());
        $num = [];
        //获取点赞数量并让其对应其作品
        foreach ($datas as $data) {
            $num[$data['id']] = $this->getWorkLikeService()->countWorkLike($data['id']);
        }
        return $this->render('WorkshowPlugin:Work-list:work-list.html.twig', ['datas' => $datas, 'num' => $num, 'type' => $type,'page'=>$page]);
    }
    protected function getWorkshowService()
    {
        return $this->getService('WorkshowPlugin:Workshow:WorkshowService');
    }

    protected function getService($alias)
    {
        $biz = $this->getBiz();
        return $biz->service($alias);
    }

    protected function getWorkLikeService()
    {
        return $this->getService('WorkshowPlugin:Workshow:WorkLikeService');
    }


}