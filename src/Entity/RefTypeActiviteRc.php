<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefTypeActiviteRc
 *
 * @ORM\Table(name="ref_type_activite_rc")
 * @ORM\Entity
 */
class RefTypeActiviteRc
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
     * @ORM\Column(name="TYPE_ACTIVITE_RC", type="string", length=50, nullable=true)
     */
    private $typeActiviteRc;


}

