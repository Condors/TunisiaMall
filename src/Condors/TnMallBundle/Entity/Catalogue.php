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

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Enseigne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEnseigne", referencedColumnName="id_enseigne")
     * })
     */
    private $idEnseigne;

    /**
     * @return int
     */
    public function getIdCatalogue()
    {
        return $this->idCatalogue;
    }

    /**
     * @param int $idCatalogue
     */
    public function setIdCatalogue($idCatalogue)
    {
        $this->idCatalogue = $idCatalogue;
    }

    /**
     * @return int
     */
    public function getIdResponsableEnseigne()
    {
        return $this->idResponsableEnseigne;
    }

    /**
     * @param int $idResponsableEnseigne
     */
    public function setIdResponsableEnseigne($idResponsableEnseigne)
    {
        $this->idResponsableEnseigne = $idResponsableEnseigne;
    }

    /**
     * @return int
     */
    public function getIdEnseigne()
    {
        return $this->idEnseigne;
    }

    /**
     * @param int $idEnseigne
     */
    public function setIdEnseigne($idEnseigne)
    {
        $this->idEnseigne = $idEnseigne;
    }




}