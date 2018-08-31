<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 14/08/2018
 * Time: 12:27
 */

namespace BackEnd\BrokinsBundle\Controller;


use BackEnd\BrokinsBundle\Entity\AdressePartenaireAssureur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdressePartenaireAssureurController extends Controller
{



    public function ListAction() {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('BackEndBrokinsBundle:AdressePartenaireAssureur')->findAll();
        return $this->render('BackEndBrokinsBundle:AdressePartenaire:listadresse.html.twig', array('modeles' => $modele));
    }
    public function ajoutAction() {
        $request = $this->get('request_stack')->getCurrentRequest();

        if ($request->getMethod() == 'POST') {

            $id = $request->get('id');
            $service = $request->get('service');
            $NOM_CONTACT_COMMERCIAL = $request->get('NOM_CONTACT_COMMERCIAL');
            $PRENOM_CONTACT_COMMERCIAL= $request->get('PRENOM_CONTACT_COMMERCIAL');
            $ADRESSE_MAIL_CONTACT_COMMERCIAL= $request->get('ADRESSE_MAIL_CONTACT_COMMERCIAL');
            $ADRESSE_POSTALE_SERVICE = $request->get('ADRESSE_POSTALE_SERVICE');
            $TELEPHONR_SERVICE = $request->get('TELEPHONR_SERVICE');
            $EMAIL_SERVICE = $request->get('EMAIL_SERVICE');

            $modele = new AdressePartenaireAssureur();


            $modele->setId($id);
            $modele->setService($service);
            $modele->setNOM_CONTACT_COMMERCIAL($NOM_CONTACT_COMMERCIAL);
            $modele->setPRENOM_CONTACT_COMMERCIAL($PRENOM_CONTACT_COMMERCIAL);
            $modele->setADRESSE_MAIL_CONTACT_COMMERCIAL($ADRESSE_MAIL_CONTACT_COMMERCIAL);
            $modele->setADRESSE_POSTALE_SERVICE($ADRESSE_POSTALE_SERVICE);
            $modele->setTELEPHONR_SERVICE($TELEPHONR_SERVICE);
            $modele->setEMAIL_SERVICE($EMAIL_SERVICE);

            $em = $this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
            return $this->redirect($this->generateUrl("listeadresse"));
        }
        return $this->render('BackEndBrokinsBundle:AdressePartenaire:ajoutadresse.html.twig');
    }

    public function supprimersAction($id) {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('BackEndBrokinsBundle:AdressePartenaireAssureur')->find($id);
        $em->remove($modele);
        $em->flush();
        return $this->redirect($this->generateUrl('listeadresse'));
    }
}