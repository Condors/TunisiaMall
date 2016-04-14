<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="pack", indexes={@ORM\Index(name="id_pack", columns={"id_pack"}), @ORM\Index(name="id_pack_2", columns={"id_pack"})})
 * @ORM\Entity
 */
class Pack
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pack", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPack;

    /**
     * @var integer
     *
     * @ORM\Column(name="Zone_A", type="integer", nullable=false)
     */
    private $zoneA;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Zone_B", type="boolean", nullable=false)
     */
    private $zoneB;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Zone_C", type="boolean", nullable=false)
     */
    private $zoneC;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ALGO_1", type="boolean", nullable=false)
     */
    private $algo1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ALGO_2", type="boolean", nullable=false)
     */
    private $algo2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ALGO_3", type="boolean", nullable=false)
     */
    private $algo3;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;


}
