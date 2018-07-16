<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefFormeJuridique
 *
 * @ORM\Table(name="ref_forme_juridique")
 * @ORM\Entity
 */
class RefFormeJuridique
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
     * @ORM\Column(name="FORME_JURIDIQUE", type="integer", nullable=true)
     */
    private $formeJuridique;


}

