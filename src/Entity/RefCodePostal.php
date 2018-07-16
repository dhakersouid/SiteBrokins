<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefCodePostal
 *
 * @ORM\Table(name="ref_code_postal")
 * @ORM\Entity
 */
class RefCodePostal
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
     * @ORM\Column(name="code_postal", type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=50, nullable=true)
     */
    private $commune;


}

