<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefFonctionPoste
 *
 * @ORM\Table(name="ref_fonction_poste")
 * @ORM\Entity
 */
class RefFonctionPoste
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
     * @ORM\Column(name="FONCTION_POSTE", type="string", length=150, nullable=true)
     */
    private $fonctionPoste;


}

