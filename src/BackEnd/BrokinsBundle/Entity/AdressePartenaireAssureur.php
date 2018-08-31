<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 14/08/2018
 * Time: 11:46
 */

namespace BackEnd\BrokinsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdressePartenaire
 *
 * @ORM\Table(name="adresse_partenaire_assureur")
 * @ORM\Entity
 */

class AdressePartenaireAssureur
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
     * @ORM\Column(name="SERVICE", type="string", length=100, nullable=true)
     */
    private $service;


    /**
     * @var string
     *
     * @ORM\Column(name="NOM_CONTACT_COMMERCIAL", type="string", length=100, nullable=true)
     */
    private $NOM_CONTACT_COMMERCIAL;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM_CONTACT_COMMERCIAL", type="string", length=100, nullable=true)
     */
    private $PRENOM_CONTACT_COMMERCIAL;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE_MAIL_CONTACT_COMMERCIAL", type="string", length=100, nullable=true)
     */
    private $ADRESSE_MAIL_CONTACT_COMMERCIAL;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE_POSTALE_SERVICE", type="string", length=100, nullable=true)
     */
    private $ADRESSE_POSTALE_SERVICE;

    /**
     * @var integer
     *
     * @ORM\Column(name="TELEPHONR_SERVICE", type="integer", length=20, nullable=true)
     */
    private $TELEPHONR_SERVICE;


    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_SERVICE", type="string", length=100, nullable=true)
     */
    private $EMAIL_SERVICE;

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
     * @return string
     */
    public function getNOM_CONTACT_COMMERCIAL()
    {
        return $this->NOM_CONTACT_COMMERCIAL;
    }

    /**
     * @param string $NOM_CONTACT_COMMERCIAL
     */
    public function setNOM_CONTACT_COMMERCIAL($NOM_CONTACT_COMMERCIAL)
    {
        $this->NOM_CONTACT_COMMERCIAL = $NOM_CONTACT_COMMERCIAL;
    }

    /**
     * @return string
     */
    public function getPRENOM_CONTACT_COMMERCIAL()
    {
        return $this->PRENOM_CONTACT_COMMERCIAL;
    }

    /**
     * @param string $PRENOM_CONTACT_COMMERCIAL
     */
    public function setPRENOM_CONTACT_COMMERCIAL($PRENOM_CONTACT_COMMERCIAL)
    {
        $this->PRENOM_CONTACT_COMMERCIAL = $PRENOM_CONTACT_COMMERCIAL;
    }

    /**
     * @return string
     */
    public function getADRESSE_MAIL_CONTACT_COMMERCIAL()
    {
        return $this->ADRESSE_MAIL_CONTACT_COMMERCIAL;
    }

    /**
     * @param string $ADRESSE_MAIL_CONTACT_COMMERCIAL
     */
    public function setADRESSE_MAIL_CONTACT_COMMERCIAL($ADRESSE_MAIL_CONTACT_COMMERCIAL)
    {
        $this->ADRESSE_MAIL_CONTACT_COMMERCIAL = $ADRESSE_MAIL_CONTACT_COMMERCIAL;
    }

    /**
     * @return string
     */
    public function getADRESSE_POSTALE_SERVICE()
    {
        return $this->ADRESSE_POSTALE_SERVICE;
    }

    /**
     * @param string $ADRESSE_POSTALE_SERVICE
     */
    public function setADRESSE_POSTALE_SERVICE($ADRESSE_POSTALE_SERVICE)
    {
        $this->ADRESSE_POSTALE_SERVICE = $ADRESSE_POSTALE_SERVICE;
    }

    /**
     * @return int
     */
    public function getTELEPHONR_SERVICE()
    {
        return $this->TELEPHONR_SERVICE;
    }

    /**
     * @param int $TELEPHONR_SERVICE
     */
    public function setTELEPHONR_SERVICE($TELEPHONR_SERVICE)
    {
        $this->TELEPHONR_SERVICE = $TELEPHONR_SERVICE;
    }

    /**
     * @return string
     */
    public function getEMAIL_SERVICE()
    {
        return $this->EMAIL_SERVICE;
    }

    /**
     * @param string $EMAIL_SERVICE
     */
    public function setEMAIL_SERVICE($EMAIL_SERVICE)
    {
        $this->EMAIL_SERVICE = $EMAIL_SERVICE;
    }



}


