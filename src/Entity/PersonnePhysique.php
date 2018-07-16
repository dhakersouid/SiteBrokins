<?php

namespace App\Entity;

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


}

