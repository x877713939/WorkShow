<?php
namespace WorkshowPlugin\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BaseController extends Controller
{
    protected function getService($alias)
    {
        $biz = $this->getBiz();
        return $biz->service($alias);
    }
    protected function getBiz()
    {
        return $this->get('biz');
    }
}