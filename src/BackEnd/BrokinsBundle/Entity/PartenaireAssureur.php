<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 24/07/2018
 * Time: 11:51
 */

namespace BackEnd\BrokinsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PartenaireAssureur
 *
 * @ORM\Table(name="partenaire_assureur")
 * @ORM\Entity
 */

class PartenaireAssureur
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
     * @ORM\Column(name="CODEPOSTALE", type="string", length=100, nullable=true)
     */
    private $codepostale;

    /**
     * @return string
     */
    public function getCodepostale()
    {
        return $this->codepostale;
    }

    /**
     * @param string $codepostale
     */
    public function setCodepostale($codepostale)
    {
        $this->codepostale = $codepostale;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE", type="string", length=100, nullable=true)
     */
    private $service;

    /**
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param string $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DEBUT_PARTENARIAT", type="date", nullable=true)
     */
    private $debutPartenariat;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FIN_PARTENARIAT	", type="date", nullable=true)
     */
    private $finPartenariat;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_UPDATE", type="date", nullable=true)
     */
    private $dateUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBASSUREUR", type="integer", nullable=true)
     */
    private $nbassureur;

    /**
     * @return int
     */
    public function getNbassureur()
    {
        return $this->nbassureur;
    }

    /**
     * @param int $nbassureur
     */
    public function setNbassureur($nbassureur)
    {
        $this->nbassureur = $nbassureur;
    }
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
    public function getDebutPartenariat()
    {
        return $this->debutPartenariat;
    }

    /**
     * @param \DateTime $debutPartenariat
     */
    public function setDebutPartenariat($debutPartenariat)
    {
        $this->debutPartenariat = $debutPartenariat;
    }

    /**
     * @return \DateTime
     */
    public function getFinPartenariat()
    {
        return $this->finPartenariat;
    }

    /**
     * @param \DateTime $finPartenariat
     */
    public function setFinPartenariat($finPartenariat)
    {
        $this->finPartenariat = $finPartenariat;
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

    }