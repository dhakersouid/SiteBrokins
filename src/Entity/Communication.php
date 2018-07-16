<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communication
 *
 * @ORM\Table(name="communication")
 * @ORM\Entity
 */
class Communication
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
     * @ORM\Column(name="EMAIL", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL_PORTABLE", type="string", length=15, nullable=true)
     */
    private $telPortable;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL_FIXE", type="string", length=15, nullable=true)
     */
    private $telFixe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DESABONNEMENT", type="boolean", nullable=true)
     */
    private $desabonnement;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PERSONNE", type="integer", nullable=true)
     */
    private $idPersonne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_UPDATE", type="date", nullable=true)
     */
    private $dateUpdate;


}

