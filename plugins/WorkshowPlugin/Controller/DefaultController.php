<?php

namespace WorkshowPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Controller\AdminV2\BaseController;
class DefaultController extends BaseController
{
    public function indexAction()
    {
        //拿轮播图数据开始
        $data = $this->getBlockService()->getBlockByCode('jianmo:home_top_banner');
        $data = $data['data'];
        $posters = $data['posters'];//拿首页轮播图数据结束
        return $this->render('WorkshowPlugin:Default:index.html.twig', ['posters' => $posters]);
    }
    protected function getBlockService()
    {
        return $this->createService('Content:BlockService');
    }
}
