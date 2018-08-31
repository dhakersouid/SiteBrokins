<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComparatifProducts
 *
 * @ORM\Table(name="comparatif_products", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_35A5796A4584665A", columns={"product_id"})}, indexes={@ORM\Index(name="IDX_35A5796A80F2F781", columns={"comparatif_id"})})
 * @ORM\Entity
 */
class ComparatifProducts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comparatif_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $comparatifId;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productId;


}

