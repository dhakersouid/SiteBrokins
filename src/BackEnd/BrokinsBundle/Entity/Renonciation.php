<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Renonciation
 *
 * @ORM\Table(name="renonciation")
 * @ORM\Entity
 */
class Renonciation
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
     * @ORM\Column(name="DATE_DEMANDE", type="date", nullable=true)
     */
    private $dateDemande;

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
     * @var boolean
     *
     * @ORM\Column(name="POSSIBILITE_RENONCIATION", type="boolean", nullable=true)
     */
    private $possibiliteRenonciation;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_TECHNIQUE", type="integer", nullable=true)
     */
    private $idProduitTechnique;


}

