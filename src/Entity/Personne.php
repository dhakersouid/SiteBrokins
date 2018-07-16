<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne", uniqueConstraints={@ORM\UniqueConstraint(name="identifiant_brokins", columns={"IDENTIFIANT_BROKINS"})})
 * @ORM\Entity
 */
class Personne
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
     * @ORM\Column(name="IDENTIFIANT_BROKINS", type="string", length=15, nullable=true)
     */
    private $identifiantBrokins;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESPACE_CLIENT", type="boolean", nullable=true)
     */
    private $espaceClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DEBUT_CLIENT", type="date", nullable=true)
     */
    private $debutClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FIN_CLIENT", type="date", nullable=true)
     */
    private $finClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_UPDATE", type="date", nullable=true)
     */
    private $dateUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="ORIGINE", type="string", length=50, nullable=true)
     */
    private $origine;

    /**
     * @var string
     *
     * @ORM\Column(name="ROLE", type="string", length=50, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PROFESSIONNEL", type="boolean", nullable=true)
     */
    private $professionnel;

    /**
     * @var string
     *
     * @ORM\Column(name="NATURE_PERSONNE", type="string", length=2, nullable=true)
     */
    private $naturePersonne;


}

