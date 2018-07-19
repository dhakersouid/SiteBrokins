<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comparatif
 *
 * @ORM\Table(name="comparatif")
 * @ORM\Entity
 */
class Comparatif
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
     * @ORM\Column(name="NUMERO_COMPARATIF", type="integer", nullable=true)
     */
    private $numeroComparatif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ENVOI", type="date", nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBRE_ASSUREUR", type="integer", nullable=true)
     */
    private $nombreAssureur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDENTIFIANT_BROKINS", type="integer", nullable=true)
     */
    private $identifiantBrokins;

    /**
     * @var integer
     *
     * @ORM\Column(name="ASSUREUR", type="integer", nullable=true)
     */
    private $assureur;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_TECHNIQUE", type="integer", nullable=true)
     */
    private $idProduitTechnique;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_COMMERCIAL", type="integer", nullable=true)
     */
    private $idProduitCommercial;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIME_TTC_ANNUELLE", type="float", precision=10, scale=0, nullable=true)
     */
    private $primeTtcAnnuelle;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIME_TTC_MENSUELLE", type="float", precision=10, scale=0, nullable=true)
     */
    private $primeTtcMensuelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="LISTE_GARANTIE", type="integer", nullable=true)
     */
    private $listeGarantie;

    /**
     * @var integer
     *
     * @ORM\Column(name="FRANCHISE", type="integer", nullable=true)
     */
    private $franchise;

    /**
     * @var integer
     *
     * @ORM\Column(name="LISTE_EXCLUSION", type="integer", nullable=true)
     */
    private $listeExclusion;

    /**
     * @var integer
     *
     * @ORM\Column(name="REFERENCE_DOCUMENTAIRE", type="integer", nullable=true)
     */
    private $referenceDocumentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="CAPITAUX_GARANTIS", type="integer", nullable=true)
     */
    private $capitauxGarantis;


}

