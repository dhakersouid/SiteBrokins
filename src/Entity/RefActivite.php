<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefActivite
 *
 * @ORM\Table(name="ref_activite")
 * @ORM\Entity
 */
class RefActivite
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
     * @ORM\Column(name="CODE_NAF", type="string", length=20, nullable=true)
     */
    private $codeNaf;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODE_ACTIVITE", type="integer", nullable=true)
     */
    private $codeActivite;


}

