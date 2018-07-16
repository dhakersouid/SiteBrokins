<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentContractuelFourni
 *
 * @ORM\Table(name="document_contractuel_fourni")
 * @ORM\Entity
 */
class DocumentContractuelFourni
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
     * @ORM\Column(name="NOM_DOCUMENT_CONTRACTUEL", type="string", length=200, nullable=true)
     */
    private $nomDocumentContractuel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_ENVOI", type="date", nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_COMMERCIAL", type="integer", nullable=true)
     */
    private $idProduitCommercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="ASSUREUR", type="integer", nullable=true)
     */
    private $assureur;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=true)
     */
    private $idContrat;


}

