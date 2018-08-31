<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 08/08/2018
 * Time: 11:53
 */

namespace BackEnd\BrokinsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * BanqueAssureur
 *
 * @ORM\Table(name="banque_assureur")
 * @ORM\Entity
 */

class BanqueAssureur
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
     * @ORM\Column(name="ASSUREUR", type="string", length=100, nullable=true)
     */
    private $assureur;

    /**
     * @var string
     *
     * @ORM\Column(name="NATURE_COMPTE_ASSUREUR", type="string", length=100, nullable=true)
     */
    private $nature_compte_assureur;

    /**
     * @var string
     *
     * @ORM\Column(name="TITULAIRE", type="string", length=100, nullable=true)
     */
    private $titulaire;

    /**
     * @var string
     *
     * @ORM\Column(name="BANQUE", type="string", length=100, nullable=true)
     */
    private $banque;

    /**
     * @var integer
     *
     * @ORM\Column(name="IBAN", type="integer", nullable=true)
     */
    private $iban;

    /**
     * @var integer
     *
     * @ORM\Column(name="BIC", type="integer", nullable=true)
     */
    private $bic;

    /**
     * @var \TIMESTAMP
     *
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_UPDATE", type="date", nullable=true)
     */
    private $dateUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FIN", type="date", nullable=true)
     */
    private $dateFin;

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
    public function getAssureur()
    {
        return $this->assureur;
    }

    /**
     * @param string $assureur
     */
    public function setAssureur($assureur)
    {
        $this->assureur = $assureur;
    }

    /**
     * @return string
     */
    public function getNatureCompteAssureur()
    {
        return $this->nature_compte_assureur;
    }

    /**
     * @param string $nature_compte_assureur
     */
    public function setNatureCompteAssureur($nature_compte_assureur)
    {
        $this->nature_compte_assureur = $nature_compte_assureur;
    }

    /**
     * @return string
     */
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * @param string $titulaire
     */
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;
    }

    /**
     * @return string
     */
    public function getBanque()
    {
        return $this->banque;
    }

    /**
     * @param string $banque
     */
    public function setBanque($banque)
    {
        $this->banque = $banque;
    }

    /**
     * @return int
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param int $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return int
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param int $bic
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
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
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * @param \DateTime $dateUpdate
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

}