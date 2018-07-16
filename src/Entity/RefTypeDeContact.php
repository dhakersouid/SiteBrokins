<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefTypeDeContact
 *
 * @ORM\Table(name="ref_type_de_contact")
 * @ORM\Entity
 */
class RefTypeDeContact
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
     * @ORM\Column(name="TYPE_DE_CONTACT", type="integer", nullable=true)
     */
    private $typeDeContact;


}

