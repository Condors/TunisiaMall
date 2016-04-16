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

    
    function getIdPack() {
        return $this->idPack;
    }

    function getZoneA() {
        return $this->zoneA;
    }

    function getZoneB() {
        return $this->zoneB;
    }

    function getZoneC() {
        return $this->zoneC;
    }

    function getAlgo1() {
        return $this->algo1;
    }

    function getAlgo2() {
        return $this->algo2;
    }

    function getAlgo3() {
        return $this->algo3;
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

    function setZoneC($zoneC) {
        $this->zoneC = $zoneC;
    }

    function setAlgo1($algo1) {
        $this->algo1 = $algo1;
    }

    function setAlgo2($algo2) {
        $this->algo2 = $algo2;
    }

    function setAlgo3($algo3) {
        $this->algo3 = $algo3;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setDescription($description) {
        $this->description = $description;
    }



}
