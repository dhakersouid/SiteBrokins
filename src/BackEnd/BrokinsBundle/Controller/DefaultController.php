<?php

namespace BackEnd\BrokinsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@BackEndBrokins/Default/index.html.twig');
    }
}
