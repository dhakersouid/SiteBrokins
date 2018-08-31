<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 01/08/2018
 * Time: 10:32
 */

namespace BackEnd\BrokinsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackEnd\BrokinsBundle\Entity\PartenaireAssureur;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class GrapheController extends Controller
{



    public function chartPieAction()
    {
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Partenaires Assureurs de Brokins  ');
        $ob->plotOptions->pie(array(         'allowPointSelect'  => true,         'cursor'    => 'pointer',         'dataLabels'    => array('enabled' => false),         'showInLegend'  => true     ));
        $em= $this->container->get('doctrine')->getEntityManager();
        $classes = $em->getRepository('BackEndBrokinsBundle:PartenaireAssureur')->findAll();
        $totalEtudiant=0;

        foreach($classes as $classe)
        {
            $totalEtudiant=$totalEtudiant+$classe->getNbassureur();
        }

        $data= array();
        foreach($classes as $classe)
        {
            $stat=array();
            array_push($stat,$classe->getAssureur(),(($classe->getNbassureur()) *100)/$totalEtudiant);
            array_push($data,$stat);
        }

        $ob->series(array(array('type' => 'pie','assureur' => 'Browser share', 'data' => $data)));
        return $this->render('BackEndBrokinsBundle:Graphe:pie.html.twig', array(         'chart' => $ob     ));
    }


















}