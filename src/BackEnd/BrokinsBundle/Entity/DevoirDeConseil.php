<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevoirDeConseil
 *
 * @ORM\Table(name="devoir_de_conseil")
 * @ORM\Entity
 */
class DevoirDeConseil
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
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_SIGNATURE", type="date", nullable=true)
     */
    private $dateSignature;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CASE_ACTIVEE", type="boolean", nullable=true)
     */
    private $caseActivee;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBRE_ASSUREUR_COMPARATIF", type="integer", nullable=true)
     */
    private $nombreAssureurComparatif;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=true)
     */
    private $idContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DEVIS", type="integer", nullable=true)
     */
    private $idDevis;


}

