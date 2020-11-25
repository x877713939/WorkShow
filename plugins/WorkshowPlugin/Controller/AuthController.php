<?php
namespace WorkshowPlugin\Controller;

use Symfony\Component\HttpFoundation\Request;

class AuthController extends BaseController{
    public function headerAction(Request $request){
        return $this->render('WorkshowPlugin:component:header.html.twig');
    }
    public function galleryAction($workid){
        $data = $this->getWorkshowService()->gallery($workid);
        $user = $data[1];
        $data = $data[0];
        $rcm = $this->getWorkshowService()->rcm($data['type']);
        $rcmCount = count($rcm);
        return $this->render('WorkshowPlugin:index:gallery.html.twig',[
            'data' => $data,
            'user' => $user,
            'rcm' => $rcm,
            'rcmCount' => $rcmCount,
        ]);
    }


    public function getWorkshowService()
    {
        return $this->getService("WorkshowPlugin:Workshow:WorkshowService");
    }
}