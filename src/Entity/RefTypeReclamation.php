<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefTypeReclamation
 *
 * @ORM\Table(name="ref_type_reclamation")
 * @ORM\Entity
 */
class RefTypeReclamation
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
     * @ORM\Column(name="TYPE_RECLAMATION", type="integer", nullable=true)
     */
    private $typeReclamation;


}

