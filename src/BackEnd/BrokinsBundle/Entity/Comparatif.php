<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comparatif
 *
 * @ORM\Table(name="comparatif", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_7D30D7084680C859", columns={"PRODUIT_TECHNIQUE"})})
 * @ORM\Entity
 */
class Comparatif
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
     * @ORM\Column(name="NUMERO_COMPARATIF", type="integer", nullable=true)
     */
    private $numeroComparatif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ENVOI", type="datetime", nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOMBRE_ASSUREUR", type="integer", nullable=true)
     */
    private $nombreAssureur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDENTIFIANT_BROKINS", type="integer", nullable=true)
     */
    private $identifiantBrokins;

    /**
     * @var integer
     *
     * @ORM\Column(name="REFERENCE_DOCUMENTAIRE", type="integer", nullable=true)
     */
    private $referenceDocumentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRODUIT_TECHNIQUE", type="integer", nullable=true)
     */
    private $produitTechnique;


}

