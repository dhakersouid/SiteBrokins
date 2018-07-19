<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefRaisonResiliation
 *
 * @ORM\Table(name="ref_raison_resiliation")
 * @ORM\Entity
 */
class RefRaisonResiliation
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
     * @ORM\Column(name="RAISON_RESILIATION", type="string", length=250, nullable=true)
     */
    private $raisonResiliation;


}

