<?php

namespace WorkshowPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WorkshowPlugin:Default:index.html.twig');
    }
}
