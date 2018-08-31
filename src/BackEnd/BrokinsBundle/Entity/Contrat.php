<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


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
     * @ORM\Column(name="TYPE_PAIEMENT", type="string", length=50, nullable=true)
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
     * @ORM\Column(name="ASSUREUR", type="string", length=50, nullable=true)
     */
    private $assureur;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_COMMERCIAL", type="string", length=50, nullable=true)
     */
    private $idProduitCommercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_TECHNIQUE", type="string", length=50, nullable=true)
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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNumeroContrat()
    {
        return $this->numeroContrat;
    }

    /**
     * @param string $numeroContrat
     */
    public function setNumeroContrat($numeroContrat)
    {
        $this->numeroContrat = $numeroContrat;
    }

    /**
     * @return int
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * @param int $idPersonne
     */
    public function setIdPersonne($idPersonne)
    {
        $this->idPersonne = $idPersonne;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param \DateTime $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return \DateTime
     */
    public function getDateEffetContrat()
    {
        return $this->dateEffetContrat;
    }

    /**
     * @param \DateTime $dateEffetContrat
     */
    public function setDateEffetContrat($dateEffetContrat)
    {
        $this->dateEffetContrat = $dateEffetContrat;
    }

    /**
     * @return int
     */
    public function getFranchise()
    {
        return $this->franchise;
    }

    /**
     * @param int $franchise
     */
    public function setFranchise($franchise)
    {
        $this->franchise = $franchise;
    }

    /**
     * @return string
     */
    public function getStatutContrat()
    {
        return $this->statutContrat;
    }

    /**
     * @param string $statutContrat
     */
    public function setStatutContrat($statutContrat)
    {
        $this->statutContrat = $statutContrat;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }

    /**
     * @return float
     */
    public function getPrimeTtcMensuelle()
    {
        return $this->primeTtcMensuelle;
    }

    /**
     * @param float $primeTtcMensuelle
     */
    public function setPrimeTtcMensuelle($primeTtcMensuelle)
    {
        $this->primeTtcMensuelle = $primeTtcMensuelle;
    }

    /**
     * @return int
     */
    public function getFraisFractionnement()
    {
        return $this->fraisFractionnement;
    }

    /**
     * @param int $fraisFractionnement
     */
    public function setFraisFractionnement($fraisFractionnement)
    {
        $this->fraisFractionnement = $fraisFractionnement;
    }

    /**
     * @return string
     */
    public function getFractionnement()
    {
        return $this->fractionnement;
    }

    /**
     * @param string $fractionnement
     */
    public function setFractionnement($fractionnement)
    {
        $this->fractionnement = $fractionnement;
    }

    /**
     * @return int
     */
    public function getListeGarantie()
    {
        return $this->listeGarantie;
    }

    /**
     * @param int $listeGarantie
     */
    public function setListeGarantie($listeGarantie)
    {
        $this->listeGarantie = $listeGarantie;
    }

    /**
     * @return int
     */
    public function getListeExclusion()
    {
        return $this->listeExclusion;
    }

    /**
     * @param int $listeExclusion
     */
    public function setListeExclusion($listeExclusion)
    {
        $this->listeExclusion = $listeExclusion;
    }

    /**
     * @return int
     */
    public function getReferenceDocumentaire()
    {
        return $this->referenceDocumentaire;
    }

    /**
     * @param int $referenceDocumentaire
     */
    public function setReferenceDocumentaire($referenceDocumentaire)
    {
        $this->referenceDocumentaire = $referenceDocumentaire;
    }

    /**
     * @return int
     */
    public function getCapitauxGarantis()
    {
        return $this->capitauxGarantis;
    }

    /**
     * @param int $capitauxGarantis
     */
    public function setCapitauxGarantis($capitauxGarantis)
    {
        $this->capitauxGarantis = $capitauxGarantis;
    }

    /**
     * @param \DateTime $dateEnvoi
     */
    public function setDateEnvoi($dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;
    }

    /**
     * @return int
     */
    public function getTypePaiement()
    {
        return $this->typePaiement;
    }

    /**
     * @param int $typePaiement
     */
    public function setTypePaiement($typePaiement)
    {
        $this->typePaiement = $typePaiement;
    }

    /**
     * @return \DateTime
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * @param \DateTime $datePaiement
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;
    }

    /**
     * @return \DateTime
     */
    public function getDateEcheanceContrat()
    {
        return $this->dateEcheanceContrat;
    }

    /**
     * @param \DateTime $dateEcheanceContrat
     */
    public function setDateEcheanceContrat($dateEcheanceContrat)
    {
        $this->dateEcheanceContrat = $dateEcheanceContrat;
    }

    /**
     * @return int
     */
    public function getAssureur()
    {
        return $this->assureur;
    }

    /**
     * @param int $assureur
     */
    public function setAssureur($assureur)
    {
        $this->assureur = $assureur;
    }

    /**
     * @return int
     */
    public function getIdProduitCommercial()
    {
        return $this->idProduitCommercial;
    }

    /**
     * @param int $idProduitCommercial
     */
    public function setIdProduitCommercial($idProduitCommercial)
    {
        $this->idProduitCommercial = $idProduitCommercial;
    }

    /**
     * @return int
     */
    public function getIdProduitTechnique()
    {
        return $this->idProduitTechnique;
    }

    /**
     * @param int $idProduitTechnique
     */
    public function setIdProduitTechnique($idProduitTechnique)
    {
        $this->idProduitTechnique = $idProduitTechnique;
    }

    /**
     * @return float
     */
    public function getPrimeTtcAnnuelle()
    {
        return $this->primeTtcAnnuelle;
    }

    /**
     * @param float $primeTtcAnnuelle
     */
    public function setPrimeTtcAnnuelle($primeTtcAnnuelle)
    {
        $this->primeTtcAnnuelle = $primeTtcAnnuelle;
    }




}

