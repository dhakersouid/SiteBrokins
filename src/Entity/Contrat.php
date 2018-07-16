<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity
 */
class Contrat
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
     * @ORM\Column(name="NUMERO_CONTRAT", type="string", length=15, nullable=true)
     */
    private $numeroContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PERSONNE", type="integer", nullable=true)
     */
    private $idPersonne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_EFFET_CONTRAT", type="date", nullable=true)
     */
    private $dateEffetContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="FRANCHISE", type="integer", nullable=true)
     */
    private $franchise;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUT_CONTRAT", type="string", length=10, nullable=true)
     */
    private $statutContrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ENVOI", type="date", nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYPE_PAIEMENT", type="integer", nullable=true)
     */
    private $typePaiement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_PAIEMENT", type="date", nullable=true)
     */
    private $datePaiement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ECHEANCE_CONTRAT", type="date", nullable=true)
     */
    private $dateEcheanceContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ASSUREUR", type="integer", nullable=true)
     */
    private $assureur;

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
     * @ORM\Column(name="FRAIS_FRACTIONNEMENT", type="integer", nullable=true)
     */
    private $fraisFractionnement;

    /**
     * @var string
     *
     * @ORM\Column(name="FRACTIONNEMENT", type="string", length=15, nullable=true)
     */
    private $fractionnement;

    /**
     * @var integer
     *
     * @ORM\Column(name="LISTE_GARANTIE", type="integer", nullable=true)
     */
    private $listeGarantie;

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

