<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity
 */
class Devis
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
     * @var integer
     *
     * @ORM\Column(name="NUMERO_DEVIS", type="integer", nullable=true)
     */
    private $numeroDevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="FRANCHISE", type="integer", nullable=true)
     */
    private $franchise;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUT_DEVIS", type="string", length=10, nullable=true)
     */
    private $statutDevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ENVOI", type="date", nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CAPITAUX_GARANTIS", type="integer", nullable=true)
     */
    private $idCapitauxGarantis;

    /**
     * @var integer
     *
     * @ORM\Column(name="REFERENCE_DOCUMENTAIRE", type="integer", nullable=true)
     */
    private $referenceDocumentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="LISTE_EXCLUSION", type="integer", nullable=true)
     */
    private $listeExclusion;

    /**
     * @var integer
     *
     * @ORM\Column(name="LISTE_GARANTIE", type="integer", nullable=true)
     */
    private $listeGarantie;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIME_TTC_MENSUELLE", type="float", precision=10, scale=0, nullable=true)
     */
    private $primeTtcMensuelle;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIME_TTC_ANNUELLE", type="float", precision=10, scale=0, nullable=true)
     */
    private $primeTtcAnnuelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_COMMERCIAL", type="integer", nullable=true)
     */
    private $idProduitCommercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_TECHNIQUE", type="integer", nullable=true)
     */
    private $idProduitTechnique;

    /**
     * @var integer
     *
     * @ORM\Column(name="ASSUREUR", type="integer", nullable=true)
     */
    private $assureur;


}

