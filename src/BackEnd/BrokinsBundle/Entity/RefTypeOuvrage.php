<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefTypeOuvrage
 *
 * @ORM\Table(name="ref_type_ouvrage")
 * @ORM\Entity
 */
class RefTypeOuvrage
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
     * @ORM\Column(name="TYPE_OUVRAGE", type="string", length=50, nullable=true)
     */
    private $typeOuvrage;


}

