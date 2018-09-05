<?php

namespace BackEnd\ComparatifBundle\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ComparatifBundle:Default:index.html.twig');
    }


    public function addAction()
    {
        $em = $this->getDoctrine().getManager();
        $forme_juridique= $em->getRepository('BackEndBrokinsBundle:RefFormeJuridique')->findAll();




        return $this->render('ComparatifBundle:Default:test.html.twig', array('forme_juridique' => $forme_juridique));
    }

    public function getData($code){

    }
}
