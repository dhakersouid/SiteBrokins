<?php

namespace BackEnd\BrokinsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefServiceAssureur
 *
 * @ORM\Table(name="ref_service_assureur")
 * @ORM\Entity
 */
class RefServiceAssureur
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
     * @ORM\Column(name="SERVICE_CLIENT", type="string", length=50, nullable=true)
     */
    private $serviceClient;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE_RECLAMATION", type="string", length=50, nullable=true)
     */
    private $serviceReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE_INFORMATION_JURIDIQUE", type="string", length=50, nullable=true)
     */
    private $serviceInformationJuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE_PROETCTION_JURIDIQUE", type="string", length=50, nullable=true)
     */
    private $serviceProetctionJuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE_DECLARATION_SINISTRE", type="string", length=50, nullable=true)
     */
    private $serviceDeclarationSinistre;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE_GESTION_SINISTRE", type="string", length=50, nullable=true)
     */
    private $serviceGestionSinistre;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE_COMMERCIAL", type="string", length=50, nullable=true)
     */
    private $serviceCommercial;


}

