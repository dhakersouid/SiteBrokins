<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaiementPostal
 *
 * @ORM\Table(name="paiement_postal")
 * @ORM\Entity
 */
class PaiementPostal
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
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_PAIEMENT", type="date", nullable=true)
     */
    private $datePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_PAIEMENT_POSTE", type="string", length=50, nullable=true)
     */
    private $statusPaiementPoste;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTANT_PAIEMENT_POSTE", type="float", precision=10, scale=0, nullable=true)
     */
    private $montantPaiementPoste;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=true)
     */
    private $idContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PIECE_JOINTE", type="integer", nullable=true)
     */
    private $idPieceJointe;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PERSONNE", type="integer", nullable=true)
     */
    private $idPersonne;


}

