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
    public function getOrigineResiliation()
    {
        return $this->origineResiliation;
    }

    /**
     * @param string $origineResiliation
     */
    public function setOrigineResiliation($origineResiliation)
    {
        $this->origineResiliation = $origineResiliation;
    }

    /**
     * @return \DateTime
     */
    public function getDateDemande()
    {
        return $this->dateDemande;
    }

    /**
     * @param \DateTime $dateDemande
     */
    public function setDateDemande($dateDemande)
    {
        $this->dateDemande = $dateDemande;
    }

    /**
     * @return int
     */
    public function getIdRaisonResiliation()
    {
        return $this->idRaisonResiliation;
    }

    /**
     * @param int $idRaisonResiliation
     */
    public function setIdRaisonResiliation($idRaisonResiliation)
    {
        $this->idRaisonResiliation = $idRaisonResiliation;
    }

    /**
     * @return int
     */
    public function getIdContrat()
    {
        return $this->idContrat;
    }

    /**
     * @param int $idContrat
     */
    public function setIdContrat($idContrat)
    {
        $this->idContrat = $idContrat;
    }

    /**
     * @return \DateTime
     */
    public function getDateSignatureContrat()
    {
        return $this->dateSignatureContrat;
    }

    /**
     * @param \DateTime $dateSignatureContrat
     */
    public function setDateSignatureContrat($dateSignatureContrat)
    {
        $this->dateSignatureContrat = $dateSignatureContrat;
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
    public function getPossibiliteResiliation()
    {
        return $this->possibiliteResiliation;
    }

    /**
     * @param int $possibiliteResiliation
     */
    public function setPossibiliteResiliation($possibiliteResiliation)
    {
        $this->possibiliteResiliation = $possibiliteResiliation;
    }

    /**
     * @return int
     */
    public function getDateRaisonResiliation()
    {
        return $this->dateRaisonResiliation;
    }

    /**
     * @param int $dateRaisonResiliation
     */
    public function setDateRaisonResiliation($dateRaisonResiliation)
    {
        $this->dateRaisonResiliation = $dateRaisonResiliation;
    }

    /**
     * @return int
     */
    public function getNouvelleAdresse()
    {
        return $this->nouvelleAdresse;
    }

    /**
     * @param int $nouvelleAdresse
     */
    public function setNouvelleAdresse($nouvelleAdresse)
    {
        $this->nouvelleAdresse = $nouvelleAdresse;
    }

    /**
     * @return int
     */
    public function getIdPiece()
    {
        return $this->idPiece;
    }

    /**
     * @param int $idPiece
     */
    public function setIdPiece($idPiece)
    {
        $this->idPiece = $idPiece;
    }

    /**
     * @return int
     */
    public function getIdPaiementPoste()
    {
        return $this->idPaiementPoste;
    }

    /**
     * @param int $idPaiementPoste
     */
    public function setIdPaiementPoste($idPaiementPoste)
    {
        $this->idPaiementPoste = $idPaiementPoste;
    }


}

