<?php
namespace WorkshowPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller{
    public function headerAction(Request $request){
        return $this->render('WorkshowPlugin:component:header.html.twig');
    }
    public function galleryAction(Request $request){
        return $this->render('WorkshowPlugin:index:gallery.html.twig');
    }
}