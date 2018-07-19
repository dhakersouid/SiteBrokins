<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resiliation
 *
 * @ORM\Table(name="resiliation")
 * @ORM\Entity
 */
class Resiliation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ORIGINE_RESILIATION", type="string", length=11, nullable=true)
     */
    private $origineResiliation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_DEMANDE", type="date", nullable=true)
     */
    private $dateDemande;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RAISON_RESILIATION", type="integer", nullable=true)
     */
    private $idRaisonResiliation;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=true)
     */
    private $idContrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_SIGNATURE_CONTRAT", type="date", nullable=true)
     */
    private $dateSignatureContrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ECHEANCE_CONTRAT", type="date", nullable=true)
     */
    private $dateEcheanceContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="POSSIBILITE_RESILIATION", type="integer", nullable=true)
     */
    private $possibiliteResiliation;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATE_RAISON_RESILIATION", type="integer", nullable=true)
     */
    private $dateRaisonResiliation;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOUVELLE_ADRESSE", type="integer", nullable=true)
     */
    private $nouvelleAdresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PIECE", type="integer", nullable=true)
     */
    private $idPiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PAIEMENT_POSTE", type="integer", nullable=true)
     */
    private $idPaiementPoste;


}

