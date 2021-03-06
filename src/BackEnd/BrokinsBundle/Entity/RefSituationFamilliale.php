<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefSituationFamilliale
 *
 * @ORM\Table(name="ref_situation_familliale")
 * @ORM\Entity
 */
class RefSituationFamilliale
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
     * @ORM\Column(name="SITUATION_FAMILLIALE", type="string", length=50, nullable=true)
     */
    private $situationFamilliale;


}

