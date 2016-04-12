<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="pack")
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
     * @ORM\Column(name="Libelle", type="string", length=15, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;



    /**
     * Get idPack
     *
     * @return integer 
     */
    public function getIdPack()
    {
        return $this->idPack;
    }

    /**
     * Set zoneA
     *
     * @param boolean $zoneA
     * @return Pack
     */
    public function setZoneA($zoneA)
    {
        $this->zoneA = $zoneA;

        return $this;
    }

    /**
     * Get zoneA
     *
     * @return boolean 
     */
    public function getZoneA()
    {
        return $this->zoneA;
    }

    /**
     * Set zoneB
     *
     * @param boolean $zoneB
     * @return Pack
     */
    public function setZoneB($zoneB)
    {
        $this->zoneB = $zoneB;

        return $this;
    }

    /**
     * Get zoneB
     *
     * @return boolean 
     */
    public function getZoneB()
    {
        return $this->zoneB;
    }

    /**
     * Set zoneC
     *
     * @param boolean $zoneC
     * @return Pack
     */
    public function setZoneC($zoneC)
    {
        $this->zoneC = $zoneC;

        return $this;
    }

    /**
     * Get zoneC
     *
     * @return boolean 
     */
    public function getZoneC()
    {
        return $this->zoneC;
    }

    /**
     * Set algo1
     *
     * @param boolean $algo1
     * @return Pack
     */
    public function setAlgo1($algo1)
    {
        $this->algo1 = $algo1;

        return $this;
    }

    /**
     * Get algo1
     *
     * @return boolean 
     */
    public function getAlgo1()
    {
        return $this->algo1;
    }

    /**
     * Set algo2
     *
     * @param boolean $algo2
     * @return Pack
     */
    public function setAlgo2($algo2)
    {
        $this->algo2 = $algo2;

        return $this;
    }

    /**
     * Get algo2
     *
     * @return boolean 
     */
    public function getAlgo2()
    {
        return $this->algo2;
    }

    /**
     * Set algo3
     *
     * @param boolean $algo3
     * @return Pack
     */
    public function setAlgo3($algo3)
    {
        $this->algo3 = $algo3;

        return $this;
    }

    /**
     * Get algo3
     *
     * @return boolean 
     */
    public function getAlgo3()
    {
        return $this->algo3;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Pack
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Pack
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
