<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity
 */
class Entreprise
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
     * @ORM\Column(name="CAPITAL_SOCIAL", type="integer", nullable=true)
     */
    private $capitalSocial;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBRE_ACTIONNAIRE", type="integer", nullable=true)
     */
    private $nombreActionnaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANNEE_EXERCICE_CA_PREVISIONNEL", type="integer", nullable=true)
     */
    private $anneeExerciceCaPrevisionnel;

    /**
     * @var integer
     *
     * @ORM\Column(name="NIVEAU_CA_PREVISIONNEL", type="integer", nullable=true)
     */
    private $niveauCaPrevisionnel;

    /**
     * @var integer
     *
     * @ORM\Column(name="CA_EXPORT", type="integer", nullable=true)
     */
    private $caExport;

    /**
     * @var integer
     *
     * @ORM\Column(name="EFFECTIF_ENTREPRISE", type="integer", nullable=true)
     */
    private $effectifEntreprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBRE_CADRE", type="integer", nullable=true)
     */
    private $nombreCadre;


}

