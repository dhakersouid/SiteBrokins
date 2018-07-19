<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefTypeActiviteBtp
 *
 * @ORM\Table(name="ref_type_activite_btp")
 * @ORM\Entity
 */
class RefTypeActiviteBtp
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
     * @ORM\Column(name="TYPE_ACTIVITE_BTP", type="integer", nullable=true)
     */
    private $typeActiviteBtp;


}

