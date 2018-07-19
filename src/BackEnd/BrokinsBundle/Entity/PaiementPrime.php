<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaiementPrime
 *
 * @ORM\Table(name="paiement_prime")
 * @ORM\Entity
 */
class PaiementPrime
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
     * @var float
     *
     * @ORM\Column(name="PRIME_TTC_MENSUELLE", type="float", precision=10, scale=0, nullable=true)
     */
    private $primeTtcMensuelle;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUT_PAIEMENT_POSTE", type="string", length=2, nullable=true)
     */
    private $statutPaiementPoste;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TYPE_PAIEMENT", type="integer", nullable=true)
     */
    private $idTypePaiement;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PERSONNE", type="integer", nullable=true)
     */
    private $idPersonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=true)
     */
    private $idContrat;


}

