<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonnePhysique
 *
 * @ORM\Table(name="personne_physique")
 * @ORM\Entity
 */
class PersonnePhysique
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
     * @ORM\Column(name="CIVILITE", type="string", length=15, nullable=true)
     */
    private $civilite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_NAISSANCE", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBRE_ENFANT", type="integer", nullable=true)
     */
    private $nombreEnfant;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_SITUATION_FAMILLIALE", type="integer", nullable=true)
     */
    private $idSituationFamilliale;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FONCTION", type="integer", nullable=true)
     */
    private $idFonction;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROFESSION", type="integer", nullable=true)
     */
    private $idProfession;

    /**
     * @var string
     *
     * @ORM\Column(name="IDENTIFIANT_BROKINS", type="string", length=15, nullable=true)
     */
    private $identifiantBrokins;

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
     * @ORM\Column(name="ADRESSE", type="string", length=255, nullable=true)
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

