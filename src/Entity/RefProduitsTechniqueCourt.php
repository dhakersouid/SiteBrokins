<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefProduitsTechniqueCourt
 *
 * @ORM\Table(name="ref_produits _technique_court")
 * @ORM\Entity
 */
class RefProduitsTechniqueCourt
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
     * @ORM\Column(name="PRODUITS _TECHNIQUE_COURT", type="string", length=50, nullable=true)
     */
    private $produitsTechniqueCourt;


}

