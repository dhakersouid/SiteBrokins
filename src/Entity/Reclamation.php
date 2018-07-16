<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
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
     * @ORM\Column(name="NUMERO_RECLAMATION", type="string", length=30, nullable=true)
     */
    private $numeroReclamation;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TYPE_RECLAMATION", type="integer", nullable=true)
     */
    private $idTypeReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="OBJET_RECLAMATION", type="string", length=500, nullable=true)
     */
    private $objetReclamation;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=true)
     */
    private $idContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ASSUREUR", type="integer", nullable=true)
     */
    private $assureur;


}

