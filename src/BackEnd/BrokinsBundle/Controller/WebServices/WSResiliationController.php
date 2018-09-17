<?php
/**
 * Created by PhpStorm.
 * User: Dhaker
 * Date: 05/09/2018
 * Time: 15:53
 */

namespace BackEnd\BrokinsBundle\Controller\WebServices;


class WSResiliationController extends Controller
{
    /**
     * Returns token for user.
     *
     * @param Resiliation $resiliation
     *
     * @return array
     */

    public function ResiliationAction(){

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

        }
        $response = new Response(Response::HTTP_OK);

        return $this->setBaseHeaders($response);

    }
}