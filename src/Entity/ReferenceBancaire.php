<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReferenceBancaire
 *
 * @ORM\Table(name="reference bancaire")
 * @ORM\Entity
 */
class ReferenceBancaire
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
     * @ORM\Column(name="NUMERO_ORDRE", type="string", length=2, nullable=true)
     */
    private $numeroOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="TITULAIRE", type="string", length=50, nullable=true)
     */
    private $titulaire;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_BANQUE", type="string", length=50, nullable=true)
     */
    private $nomBanque;

    /**
     * @var integer
     *
     * @ORM\Column(name="IBAN", type="integer", nullable=true)
     */
    private $iban;

    /**
     * @var integer
     *
     * @ORM\Column(name="BIC", type="integer", nullable=true)
     */
    private $bic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_MAJ", type="date", nullable=true)
     */
    private $dateMaj;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PERSONNE", type="integer", nullable=true)
     */
    private $idPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE_COMPTE", type="string", length=15, nullable=true)
     */
    private $typeCompte;


}

