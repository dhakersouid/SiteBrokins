<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 29/08/2018
 * Time: 10:24
 */

namespace BackEnd\BrokinsBundle\Controller;


use BackEnd\BrokinsBundle\Entity\Contrat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContratController extends Controller
{
    public function ListAction() {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('BackEndBrokinsBundle:Contrat')->findAll();
        return $this->render('BackEndBrokinsBundle:GestionContrat:listcontrat.html.twig', array('modeles' => $modele));

    }




    public function ajoutAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        $idPersonne=1;
        $idProduitCommercial=5;
        $idProduitTechnique=4;
        if ($request->getMethod() == 'POST') {

            $id = $request->get('id');
            $numeroContrat = $request->get('numeroContrat');
            $idPersonne = $request->get('idPersonne');
            $dateCreation= $request->get('dateCreation');
            $x = new \DateTime($dateCreation);
            $dateEffetContrat= $request->get('dateEffetContrat');
            $y = new \DateTime($dateEffetContrat);
            $franchise = $request->get('franchise');
            $statutContrat = $request->get('statutContrat');
            $dateEnvoi = $request->get('dateEnvoi');
            $z = new \DateTime($dateEnvoi);
            $typePaiement = $request->get('typePaiement');
            $datePaiement = $request->get('datePaiement');
            $w = new \DateTime($datePaiement);
            $dateEcheanceContrat = $request->get('dateEcheanceContrat');
            $a = new \DateTime($dateEcheanceContrat);
            $assureur = $request->get('assureur');
            $idProduitCommercial = $request->get('idProduitCommercial');
            $idProduitTechnique = $request->get('idProduitTechnique');
            $primeTtcAnnuelle = $request->get('primeTtcAnnuelle');
            $primeTtcMensuelle = $request->get('primeTtcMensuelle');
            $fraisFractionnement = $request->get('fraisFractionnement');
            $fractionnement = $request->get('fractionnement');
            $listeGarantie = $request->get('listeGarantie');
            $listeExclusion = $request->get('listeExclusion');
            $referenceDocumentaire = $request->get('referenceDocumentaire');
            $capitauxGarantis = $request->get('capitauxGarantis');

            $modele = new Contrat();

            $modele->setId($id);
            $modele->setNumeroContrat($numeroContrat);
            $modele->setIdPersonne(1);
            $modele->setDateCreation($x);
            $modele->setDateEffetContrat($y);
            $modele->setFranchise($franchise);
            $modele->setStatutContrat($statutContrat);
            $modele->setDateEnvoi($z);
            $modele->setTypePaiement($typePaiement);
            $modele->setDatePaiement($w);
            $modele->setDateEcheanceContrat($a);
            $modele->setAssureur($assureur);
            $modele->setIdProduitCommercial($idProduitCommercial);
            $modele->setIdProduitTechnique($idProduitTechnique);
            $modele->setPrimeTtcAnnuelle($primeTtcAnnuelle);
            $modele->setPrimeTtcMensuelle($primeTtcMensuelle);
            $modele->setFraisFractionnement($fraisFractionnement);
            $modele->setFractionnement($fractionnement);
            $modele->setListeGarantie($listeGarantie);
            $modele->setListeExclusion($listeExclusion);
            $modele->setReferenceDocumentaire($referenceDocumentaire);
            $modele->setCapitauxGarantis($capitauxGarantis);

            $em = $this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
            return $this->redirect($this->generateUrl("listecontrat"));
        }
        return $this->render('BackEndBrokinsBundle:GestionContrat:ajoutcontrat.html.twig');
    }

    public function supprimersAction($id) {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('BackEndBrokinsBundle:Contrat')->find($id);
        $em->remove($modele);
        $em->flush();
        return $this->redirect($this->generateUrl('listecontrat'));
    }



    public function reserverAction($id) {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        $mod = $em->getRepository('BackEndBrokinsBundle:Contrat')->findAll();
        // return $this->render('VoitureBundle:Front:Reserver_r.html.twig', array('voiture' => $mod));

        $entity = $em->getRepository('BackEndBrokinsBundle:Contrat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sejour entity.');
        } {
            $request = $this->get('request_stack');

            if ($request->getMethod() == 'POST') {
                $id = $request->get('id');

                $dateCreation= $request->get('dateCreation');
                $x = new \DateTime($dateCreation);
                $numeroContrat = $request->get('numeroContrat');//
                $modele = new Contrat();
                $modele->setId($id);
                $modele->setDateCreation($dateCreation);
                $modele->setNumeroContrat($numeroContrat);



                $em = $this->getDoctrine()->getManager();
                $em->persist($modele);
                $em->flush();

                $em->merge($entity);
                $em->flush();
                return $this->redirect($this->generateUrl("listecontrat"));
            }
            return $this->render('GovoyageBundle:Front:reserver_s.html.twig', array('entity' => $entity, 'sejour' => $mod));
        }
    }












}