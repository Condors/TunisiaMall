<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achatpack
 *
 * @ORM\Table(name="achatpack", indexes={@ORM\Index(name="idResponsable", columns={"idResponsable", "idPack"}), @ORM\Index(name="idPack", columns={"idPack"}), @ORM\Index(name="IDX_324C3F5C120FF27F", columns={"idResponsable"})})
 * @ORM\Entity(repositoryClass="Condors\TnMallBundle\Entity\AchatpackRepository")
 */
class Achatpack
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAchat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idachat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAchat", type="date", nullable=false)
     */
    private $dateachat;

    /**
     * @var \Condors\TnMallBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Condors\TnMallBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idResponsable", referencedColumnName="id")
     * })
     */
    private $idresponsable;

    /**
     * @var \Condors\TnMallBundle\Entity\Pack
     *
     * @ORM\ManyToOne(targetEntity="Condors\TnMallBundle\Entity\Pack")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPack", referencedColumnName="id_pack")
     * })
     */
    private $idpack;


}
