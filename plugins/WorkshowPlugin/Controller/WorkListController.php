<?php


namespace WorkshowPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class WorkListController extends Controller
{
    public function indexAction()
    {
        return $this->render('WorkshowPlugin:Work-list:work-list.html.twig');
    }

    public function searchClassAction()
    {
        return $this->render('WorkshowPlugin:Work-list:work-list-content.html.twig');
    }

}