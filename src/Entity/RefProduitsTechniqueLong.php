<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefProduitsTechniqueLong
 *
 * @ORM\Table(name="ref_produits_technique_long")
 * @ORM\Entity
 */
class RefProduitsTechniqueLong
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

