<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sinistre
 *
 * @ORM\Table(name="sinistre")
 * @ORM\Entity
 */
class Sinistre
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
     * @ORM\Column(name="DATE_CREATION", type="string", length=500, nullable=true)
     */
    private $dateCreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=true)
     */
    private $idContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_OFFRE", type="string", length=500, nullable=true)
     */
    private $descriptionOffre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_TECHNIQUE", type="integer", nullable=true)
     */
    private $idProduitTechnique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_SURVENANCE_SINISTRE", type="date", nullable=true)
     */
    private $dateSurvenanceSinistre;

    /**
     * @var string
     *
     * @ORM\Column(name="PRECISION_SINISTRE", type="string", length=500, nullable=true)
     */
    private $precisionSinistre;

    /**
     * @var string
     *
     * @ORM\Column(name="PRECISION_DEGAT", type="string", length=500, nullable=true)
     */
    private $precisionDegat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PIECE_JOINTE", type="integer", nullable=true)
     */
    private $idPieceJointe;


}

