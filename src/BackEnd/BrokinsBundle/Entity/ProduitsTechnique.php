<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitsTechnique
 *
 * @ORM\Table(name="produits_technique")
 * @ORM\Entity
 */
class ProduitsTechnique
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
     * @ORM\Column(name="PRODUITS_TECHNIQUE_LONG", type="string", length=50, nullable=true)
     */
    private $produitsTechniqueLong;


}

