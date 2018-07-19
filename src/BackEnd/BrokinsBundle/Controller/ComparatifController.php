<?php
/**
 * Created by PhpStorm.
 * User: Dhaker
 * Date: 18/07/2018
 * Time: 10:11
 */

namespace BackEnd\BrokinsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


use BackEnd\BrokinsBundle\Entity\Comparatif;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ComparatifController extends Controller
{

    public function addAction()
    {

        $comparatif= new Comparatif();

        

        return $this->render('@BackEndBrokins/test/devis2.html.twig', array());
    }
}