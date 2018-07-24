<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdressePersonne
 *
 * @ORM\Table(name="adresse_personne")
 * @ORM\Entity
 */
class AdressePersonne
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
     * @ORM\Column(name="NUMERO_TYPE_NOM_VOIE", type="string", length=200, nullable=true)
     */
    private $numeroTypeNomVoie;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODE_POSTALE", type="integer", nullable=true)
     */
    private $codePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE", type="string", length=200, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYS", type="string", length=200, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE_LOGEMENT", type="string", length=50, nullable=true)
     */
    private $typeLogement;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBRE_PIECE", type="integer", nullable=true)
     */
    private $nombrePiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBRE_MCARRE", type="integer", nullable=true)
     */
    private $nombreMcarre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FIN_ADRESSE", type="date", nullable=true)
     */
    private $dateFinAdresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_MAJ_ADRESSE", type="date", nullable=true)
     */
    private $dateMajAdresse;

    /**
     * @var integer
     */
    private $personne;

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
    public function getNumeroTypeNomVoie()
    {
        return $this->numeroTypeNomVoie;
    }

    /**
     * @param string $numeroTypeNomVoie
     */
    public function setNumeroTypeNomVoie($numeroTypeNomVoie)
    {
        $this->numeroTypeNomVoie = $numeroTypeNomVoie;
    }

    /**
     * @return int
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * @param int $codePostale
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getTypeLogement()
    {
        return $this->typeLogement;
    }

    /**
     * @param string $typeLogement
     */
    public function setTypeLogement($typeLogement)
    {
        $this->typeLogement = $typeLogement;
    }

    /**
     * @return int
     */
    public function getNombrePiece()
    {
        return $this->nombrePiece;
    }

    /**
     * @param int $nombrePiece
     */
    public function setNombrePiece($nombrePiece)
    {
        $this->nombrePiece = $nombrePiece;
    }

    /**
     * @return int
     */
    public function getNombreMcarre()
    {
        return $this->nombreMcarre;
    }

    /**
     * @param int $nombreMcarre
     */
    public function setNombreMcarre($nombreMcarre)
    {
        $this->nombreMcarre = $nombreMcarre;
    }

    /**
     * @return \DateTime
     */
    public function getDateFinAdresse()
    {
        return $this->dateFinAdresse;
    }

    /**
     * @param \DateTime $dateFinAdresse
     */
    public function setDateFinAdresse($dateFinAdresse)
    {
        $this->dateFinAdresse = $dateFinAdresse;
    }

    /**
     * @return \DateTime
     */
    public function getDateMajAdresse()
    {
        return $this->dateMajAdresse;
    }

    /**
     * @param \DateTime $dateMajAdresse
     */
    public function setDateMajAdresse($dateMajAdresse)
    {
        $this->dateMajAdresse = $dateMajAdresse;
    }

    /**
     * @return int
     */
    public function getPersonne()
    {
        return $this->personne;
    }

    /**
     * @param int $personne
     */
    public function setPersonne($personne)
    {
        $this->personne = $personne;
    }




}

