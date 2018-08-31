<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefGarantie
 *
 * @ORM\Table(name="ref_garantie")
 * @ORM\Entity
 */
class RefGarantie
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
     * @ORM\Column(name="NOM_GARANTIE", type="string", length=250, nullable=true)
     */
    private $nomGarantie;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=250, nullable=true)
     */
    private $description;


}

