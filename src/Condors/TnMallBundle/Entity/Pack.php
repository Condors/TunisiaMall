<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="pack", indexes={@ORM\Index(name="id_pack", columns={"id_pack"}), @ORM\Index(name="id_pack_2", columns={"id_pack"})})
 * @ORM\Entity(repositoryClass="Condors\TnMallBundle\Entity\PackRepository")
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
     * @var boolean
     *
     * @ORM\Column(name="Zone_A", type="boolean", nullable=false)
     */
    private $zoneA;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Zone_B", type="boolean", nullable=false)
     */
    private $zoneB;



   
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

    
    function getIdPack() {
        return $this->idPack;
    }

    function getZoneA() {
        return $this->zoneA;
    }

    function getZoneB() {
        return $this->zoneB;
    }



   

    function getLibelle() {
        return $this->libelle;
    }

    function getDescription() {
        return $this->description;
    }

    function setIdPack($idPack) {
        $this->idPack = $idPack;
    }

    function setZoneA($zoneA) {
        $this->zoneA = $zoneA;
    }

    function setZoneB($zoneB) {
        $this->zoneB = $zoneB;
    }


   

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setDescription($description) {
        $this->description = $description;
    }



}
