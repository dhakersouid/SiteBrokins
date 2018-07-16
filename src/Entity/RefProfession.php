<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefProfession
 *
 * @ORM\Table(name="ref_profession")
 * @ORM\Entity
 */
class RefProfession
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
     * @ORM\Column(name="PROFESSION", type="string", length=100, nullable=true)
     */
    private $profession;


}

