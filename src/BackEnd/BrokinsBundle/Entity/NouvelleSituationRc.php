<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NouvelleSituationRc
 *
 * @ORM\Table(name="nouvelle_situation_rc")
 * @ORM\Entity
 */
class NouvelleSituationRc
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
     * @ORM\Column(name="NUMERO_CONTRAT", type="integer", nullable=true)
     */
    private $numeroContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PRODUIT_TECHNIQUE", type="integer", nullable=true)
     */
    private $idProduitTechnique;

    /**
     * @var integer
     *
     * @ORM\Column(name="MONTANT_CA_REEL", type="integer", nullable=true)
     */
    private $montantCaReel;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANNEE_EXERCICE_MONTANT_CA", type="integer", nullable=true)
     */
    private $anneeExerciceMontantCa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NIVEAU_CA_PREVISIONNEL", type="integer", nullable=true)
     */
    private $niveauCaPrevisionnel;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANNEE_EXERCICE_NIVEAU_CA", type="integer", nullable=true)
     */
    private $anneeExerciceNiveauCa;

    /**
     * @var integer
     *
     * @ORM\Column(name="LISTE_ACTIVITE_RC", type="integer", nullable=true)
     */
    private $listeActiviteRc;

    /**
     * @var integer
     *
     * @ORM\Column(name="CA_ASSOCIE_RC", type="integer", nullable=true)
     */
    private $caAssocieRc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_AJOUT_ACTIVITE", type="date", nullable=true)
     */
    private $dateAjoutActivite;


}

