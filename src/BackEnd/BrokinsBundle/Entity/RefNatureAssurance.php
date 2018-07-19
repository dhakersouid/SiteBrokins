<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefNatureAssurance
 *
 * @ORM\Table(name="ref_nature_assurance")
 * @ORM\Entity
 */
class RefNatureAssurance
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
     * @ORM\Column(name="NATURE_ASSURANCE", type="string", length=20, nullable=true)
     */
    private $natureAssurance;


}

