<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonneMorale
 *
 * @ORM\Table(name="personne_morale")
 * @ORM\Entity
 */
class PersonneMorale
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
     * @ORM\Column(name="RAISON_SOCIALE", type="string", length=50, nullable=true)
     */
    private $raisonSociale;

    /**
     * @var integer
     *
     * @ORM\Column(name="SIREN", type="integer", nullable=true)
     */
    private $siren;

    /**
     * @var integer
     *
     * @ORM\Column(name="SIRET", type="integer", nullable=true)
     */
    private $siret;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CLOTURE_COMPTABLE", type="date", nullable=true)
     */
    private $clotureComptable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_IMMATRICULATION", type="date", nullable=true)
     */
    private $dateImmatriculation;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODE_NAF", type="integer", nullable=true)
     */
    private $codeNaf;

    /**
     * @var string
     *
     * @ORM\Column(name="FORME_JURIDIQUE", type="string", length=150, nullable=true)
     */
    private $formeJuridique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FERMETURE", type="date", nullable=true)
     */
    private $dateFermeture;

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE_SIREN", type="string", length=50, nullable=true)
     */
    private $villeSiren;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ACTIVITE_PRINCIPALE", type="integer", nullable=true)
     */
    private $idActivitePrincipale;

    /**
     * @var integer
     *
     * @ORM\Column(name="LISTE_ACTIVITE_RC", type="integer", nullable=true)
     */
    private $listeActiviteRc;

    /**
     * @var integer
     *
     * @ORM\Column(name="LISTE_ACTIVITE_RCD", type="integer", nullable=true)
     */
    private $listeActiviteRcd;


}

