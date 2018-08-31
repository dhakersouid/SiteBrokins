<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitsCommercial
 *
 * @ORM\Table(name="produits _commercial")
 * @ORM\Entity
 */
class ProduitsCommercial
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
     * @ORM\Column(name="PRODUITS _COMMERCIAL", type="string", length=100, nullable=true)
     */
    private $produitsCommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="FRANCHISE", type="string", length=100, nullable=true)
     */
    private $franchise;

    /**
     * @var string
     *
     * @ORM\Column(name="SEUIL", type="string", length=50, nullable=true)
     */
    private $seuil;

    /**
     * @var string
     *
     * @ORM\Column(name="DELAI_INTERVENTION", type="string", length=10, nullable=true)
     */
    private $delaiIntervention;

    /**
     * @var string
     *
     * @ORM\Column(name="PLAFONDS_CA", type="string", length=50, nullable=true)
     */
    private $plafondsCa;

    /**
     * @var string
     *
     * @ORM\Column(name="PLAFONDS_EXPERTISE_JUDICIAIRE", type="string", length=50, nullable=true)
     */
    private $plafondsExpertiseJudiciaire;


}

