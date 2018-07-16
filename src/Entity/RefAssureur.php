<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefAssureur
 *
 * @ORM\Table(name="ref_assureur")
 * @ORM\Entity
 */
class RefAssureur
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
     * @ORM\Column(name="NOM_ASSUREUR", type="string", length=50, nullable=true)
     */
    private $nomAssureur;


}

