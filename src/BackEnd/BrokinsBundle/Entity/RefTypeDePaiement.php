<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefTypeDePaiement
 *
 * @ORM\Table(name="ref_type_de_paiement")
 * @ORM\Entity
 */
class RefTypeDePaiement
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
     * @ORM\Column(name="TYPE_DE_PAIEMENT", type="string", length=20, nullable=true)
     */
    private $typeDePaiement;


}

