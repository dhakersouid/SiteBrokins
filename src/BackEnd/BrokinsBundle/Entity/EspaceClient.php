<?php
/**
 * Created by PhpStorm.
 * User: Dhaker
 * Date: 19/07/2018
 * Time: 17:35
 */

namespace BackEnd\BrokinsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use BackEnd\BrokinsBundle\Entity\Personne ;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * EspaceClient
 *
 * @ORM\Table(name="espaceclient")
 * @ORM\Entity
 */

class EspaceClient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



}