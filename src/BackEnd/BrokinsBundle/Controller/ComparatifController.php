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
use Symfony\Component\HttpFoundation\Request;

class ComparatifController extends Controller
{
    /**
     *
     * @Method("POST")
     *
     */
    public function addAction(Request $request)
    {

        $comparatif= new Comparatif();


        dump($request);
        $siren= $request->request->get('siren');
        dump($siren);


    $comparatif= new Comparatif();
        return $this->render('@BackEndBrokins/test/devis2.html.twig', array()); }

    public function ObtenirDevisAction(Request $request)
    {



        dump($request);
        $siren= $request->request->get('siren');
        dump($siren);

return $this->render('@BackEndBrokins/test/devis2.html.twig', array());
}
}