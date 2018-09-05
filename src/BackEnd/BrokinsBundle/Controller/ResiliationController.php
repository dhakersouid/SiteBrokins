<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 30/08/2018
 * Time: 16:05
 */

namespace BackEnd\BrokinsBundle\Controller;
use BackEnd\BrokinsBundle\Entity\Resiliation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResiliationController extends Controller
{
    public function ListAction() {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('BackEndBrokinsBundle:Resiliation')->findAll();
        return $this->render('BackEndBrokinsBundle:GestionResiliation:listresiliation.html.twig', array('modeles' => $modele));
    }


    public function ajoutAction() {

        $request = $this->get('request_stack')->getCurrentRequest();
        if ($request->getMethod() == 'POST') {

            $id = $request->get('id');
            $origineResiliation = $request->get('origineResiliation');
            $dateDemande = $request->get('dateDemande');
            $a = new \DateTime($dateDemande);
            $idRaisonResiliation = $request->get('idRaisonResiliation');
            $idContrat = $request->get('idContrat');
            $dateSignatureContrat = $request->get('dateSignatureContrat');
            $b = new \DateTime($dateSignatureContrat);
            $dateEcheanceContrat = $request->get('dateEcheanceContrat');
            $c = new \DateTime($dateEcheanceContrat);
            $possibiliteResiliation = $request->get('possibiliteResiliation');

            $nouvelleAdresse = $request->get('nouvelleAdresse');
            $idPiece = $request->get('$idPiece');
            $idPaiementPoste = $request->get('$idPaiementPoste');

            $modele = new Resiliation();

            $modele->setId($id);
            $modele->setOrigineResiliation($origineResiliation);
            $modele->setDateDemande($a);
            $modele->setIdRaisonResiliation($idRaisonResiliation);
            $modele->setIdContrat(4);
            $modele->setDateSignatureContrat($b);
            $modele->setDateEcheanceContrat($c);
            $modele->setPossibiliteResiliation($possibiliteResiliation);
            $modele->setNouvelleAdresse($nouvelleAdresse);
            $modele->setIdPiece(1);
            $modele->setIdPaiementPoste(5);

            $em = $this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
            return $this->redirect($this->generateUrl("listeresiliation"));
        }
        return $this->render('BackEndBrokinsBundle:GestionResiliation:ajoutresiliation.html.twig');
    }



    public function supprimersAction($id) {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('BackEndBrokinsBundle:Resiliation')->find($id);
        $em->remove($modele);
        $em->flush();
        return $this->redirect($this->generateUrl('listeresiliation'));
    }
}