<?php

namespace BackEnd\BrokinsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackEndBrokinsBundle:Default:index.html.twig');
    }
}
