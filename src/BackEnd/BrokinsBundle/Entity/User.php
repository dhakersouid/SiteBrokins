<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_2DA17977C05FB297", columns={"confirmation_token"})})
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="DATE_CREATION", type="string", length=500, nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_CLOTURE", type="string", length=500, nullable=true)
     */
    private $dateCloture;

    /**
     * @var string
     *
     * @ORM\Column(name="DATE_MAJ", type="string", length=500, nullable=true)
     */
    private $dateMaj;

    public function __construct()
    {
        parent::__construct();
    }
}

