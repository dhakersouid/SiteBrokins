<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutreContrat
 *
 * @ORM\Table(name="autre_contrat")
 * @ORM\Entity
 */
class AutreContrat
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
     * @var integer
     *
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=true)
     */
    private $idContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_TECHNIQUE", type="integer", nullable=true)
     */
    private $idProduitTechnique;

    /**
     * @var integer
     *
     * @ORM\Column(name="ASSUREUR_AUTRE", type="integer", nullable=true)
     */
    private $assureurAutre;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBRE_PIECE_JOINTE", type="integer", nullable=true)
     */
    private $nombrePieceJointe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_UPLOAD", type="date", nullable=true)
     */
    private $dateUpload;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIME_TTC_AUTRE", type="float", precision=10, scale=0, nullable=true)
     */
    private $primeTtcAutre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ECHEANCE_CONTRAT_AUTRE", type="date", nullable=true)
     */
    private $dateEcheanceContratAutre;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMERO_CONTRAT_AUTRE", type="integer", nullable=true)
     */
    private $numeroContratAutre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_SUPPRESSION", type="date", nullable=true)
     */
    private $dateSuppression;


}

