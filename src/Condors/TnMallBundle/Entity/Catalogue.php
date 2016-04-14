<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 *
 * @ORM\Table(name="catalogue", indexes={@ORM\Index(name="IDX_59A699F564775DD5", columns={"idEnseigne"}), @ORM\Index(name="id_catalogue", columns={"id_catalogue"}), @ORM\Index(name="id_responsable_enseigne", columns={"id_responsable_enseigne"}), @ORM\Index(name="id_catalogue_2", columns={"id_catalogue"}), @ORM\Index(name="id_responsable_enseigne_2", columns={"id_responsable_enseigne"})})
 * @ORM\Entity
 */
class Catalogue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_catalogue", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatalogue;

    /**
     * @var \Condors\TnMallBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Condors\TnMallBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_responsable_enseigne", referencedColumnName="id")
     * })
     */
    private $idResponsableEnseigne;

    /**
     * @var \Condors\TnMallBundle\Entity\Enseigne
     *
     * @ORM\ManyToOne(targetEntity="Condors\TnMallBundle\Entity\Enseigne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEnseigne", referencedColumnName="id_enseigne")
     * })
     */
    private $idenseigne;


}
