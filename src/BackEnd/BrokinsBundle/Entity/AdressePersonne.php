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
     *
     * @ORM\Column(name="ID_PERSONNE", type="integer", nullable=true)
     */
    private $idPersonne;


}

