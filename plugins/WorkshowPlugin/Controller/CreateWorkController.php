<?php


namespace WorkshowPlugin\Controller;


use AppBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;

class CreateWorkController extends BaseController
{
    public function indexAction(){
        return $this->render('WorkshowPlugin:Work:creatework.html.twig');
    }

    public function createAction(Request $request){
        $user = $this->getCurrentUser();
        $data['title'] = $request->request->get('title');
        $data['article'] = $request->request->get('article');
        $data['status'] = $request->request->get('status');
        $data['type'] = $request->request->get('type');
        $data['user_id'] = $user['id'];
        $data['cover'] = '1';
        $result = $this->getCreateWorkService()->createWork($data);
        if ($result == true){
            return $this->json('success');
        }else{
            return $this->json('fail');
        }
    }

    public function getCreateWorkService(){
        return $this->createService('WorkshowPlugin:Workshow:CreateWorkService');
    }
}