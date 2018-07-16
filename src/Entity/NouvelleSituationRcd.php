<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NouvelleSituationRcd
 *
 * @ORM\Table(name="nouvelle_situation_rcd")
 * @ORM\Entity
 */
class NouvelleSituationRcd
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
     * @ORM\Column(name="ID_CONTRAT", type="integer", nullable=true)
     */
    private $idContrat;

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
     * @ORM\Column(name="NOMBRE_CANTIER_REALISE", type="integer", nullable=true)
     */
    private $nombreCantierRealise;

    /**
     * @var integer
     *
     * @ORM\Column(name="COUT_GROS_CHANTIER", type="integer", nullable=true)
     */
    private $coutGrosChantier;

    /**
     * @var integer
     *
     * @ORM\Column(name="COUT_MOYEN_CHANTIER", type="integer", nullable=true)
     */
    private $coutMoyenChantier;

    /**
     * @var integer
     *
     * @ORM\Column(name="MONTANT_GROS_MARCHE", type="integer", nullable=true)
     */
    private $montantGrosMarche;

    /**
     * @var integer
     *
     * @ORM\Column(name="COUT_MOYEN_MARCHE", type="integer", nullable=true)
     */
    private $coutMoyenMarche;

    /**
     * @var integer
     *
     * @ORM\Column(name="EFFECTIF_OUVRIER_CDI", type="integer", nullable=true)
     */
    private $effectifOuvrierCdi;

    /**
     * @var integer
     *
     * @ORM\Column(name="MONTANT_CA_ANC", type="integer", nullable=true)
     */
    private $montantCaAnc;

    /**
     * @var integer
     *
     * @ORM\Column(name="MONTANT_CHANTIER_ANC", type="integer", nullable=true)
     */
    private $montantChantierAnc;

    /**
     * @var integer
     *
     * @ORM\Column(name="NIVEAU_CA_PREVISIONNEL", type="integer", nullable=true)
     */
    private $niveauCaPrevisionnel;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANNEE_EXERCICE_MONTANT_CA_REEL", type="integer", nullable=true)
     */
    private $anneeExerciceMontantCaReel;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANNEE_EXERCICE_NIVEAU_CA_PREVISIONNEL", type="integer", nullable=true)
     */
    private $anneeExerciceNiveauCaPrevisionnel;


}

