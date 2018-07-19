<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne", uniqueConstraints={@ORM\UniqueConstraint(name="identifiant_brokins", columns={"IDENTIFIANT_BROKINS"})})
 * @ORM\Entity
 */
class Personne
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
     * @ORM\Column(name="IDENTIFIANT_BROKINS", type="string", length=15, nullable=true)
     */
    private $identifiantBrokins;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ESPACE_CLIENT", type="boolean", nullable=true)
     */
    private $espaceClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_CREATION", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DEBUT_CLIENT", type="date", nullable=true)
     */
    private $debutClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FIN_CLIENT", type="date", nullable=true)
     */
    private $finClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_UPDATE", type="date", nullable=true)
     */
    private $dateUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="ORIGINE", type="string", length=50, nullable=true)
     */
    private $origine;

    /**
     * @var string
     *
     * @ORM\Column(name="ROLE", type="string", length=50, nullable=true)
     */
    private $role;

    /**
     * @var string
     * @OneToOne(targetEntity="Adresse", inversedBy="personne")
     * @JoinColumn(name="id", referencedColumnName="id", nullable=true)
     */
    private $adresse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PROFESSIONNEL", type="boolean", nullable=true)
     */
    private $professionnel;

    /**
     * @var string
     *
     * @ORM\Column(name="NATURE_PERSONNE", type="string", length=2, nullable=true)
     */
    private $naturePersonne;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIdentifiantBrokins()
    {
        return $this->identifiantBrokins;
    }

    /**
     * @param string $identifiantBrokins
     */
    public function setIdentifiantBrokins($identifiantBrokins)
    {
        $this->identifiantBrokins = $identifiantBrokins;
    }

    /**
     * @return bool
     */
    public function isEspaceClient()
    {
        return $this->espaceClient;
    }

    /**
     * @param bool $espaceClient
     */
    public function setEspaceClient($espaceClient)
    {
        $this->espaceClient = $espaceClient;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param \DateTime $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return \DateTime
     */
    public function getDebutClient()
    {
        return $this->debutClient;
    }

    /**
     * @param \DateTime $debutClient
     */
    public function setDebutClient($debutClient)
    {
        $this->debutClient = $debutClient;
    }

    /**
     * @return \DateTime
     */
    public function getFinClient()
    {
        return $this->finClient;
    }

    /**
     * @param \DateTime $finClient
     */
    public function setFinClient($finClient)
    {
        $this->finClient = $finClient;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * @param \DateTime $dateUpdate
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * @param string $origine
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return bool
     */
    public function isProfessionnel()
    {
        return $this->professionnel;
    }

    /**
     * @param bool $professionnel
     */
    public function setProfessionnel($professionnel)
    {
        $this->professionnel = $professionnel;
    }

    /**
     * @return string
     */
    public function getNaturePersonne()
    {
        return $this->naturePersonne;
    }

    /**
     * @param string $naturePersonne
     */
    public function setNaturePersonne($naturePersonne)
    {
        $this->naturePersonne = $naturePersonne;
    }


}

