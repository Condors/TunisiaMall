<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 *
 * @ORM\Table(name="catalogue", indexes={@ORM\Index(name="id_catalogue", columns={"id_catalogue"}), @ORM\Index(name="id_responsable_enseigne", columns={"id_responsable_enseigne"}), @ORM\Index(name="id_catalogue_2", columns={"id_catalogue"}), @ORM\Index(name="id_responsable_enseigne_2", columns={"id_responsable_enseigne"})})
 * @ORM\Entity
 */
class Catalogue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_catalogue", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatalogue;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_responsable_enseigne", referencedColumnName="id")
     * })
     */
    private $idResponsableEnseigne;


}
