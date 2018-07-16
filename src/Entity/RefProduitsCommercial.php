<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefProduitsCommercial
 *
 * @ORM\Table(name="ref_produits _commercial")
 * @ORM\Entity
 */
class RefProduitsCommercial
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
     * @var integer
     *
     * @ORM\Column(name="ASSUREUR", type="integer", nullable=true)
     */
    private $assureur;

    /**
     * @var float
     *
     * @ORM\Column(name="COMMISSION", type="float", precision=10, scale=0, nullable=true)
     */
    private $commission;


}

