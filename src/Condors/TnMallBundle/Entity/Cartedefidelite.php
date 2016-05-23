<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartedefidelite
 *
 * @ORM\Table(name="cartedefidelite", indexes={@ORM\Index(name="id_carte", columns={"idCarte"}), @ORM\Index(name="id_client", columns={"id"}), @ORM\Index(name="id_enseigne", columns={"idEnseigne"})})
 * @ORM\Entity
 */
class Cartedefidelite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCarte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcarte;

    /**
     * @var string
     *
     * @ORM\Column(name="nbrePoints", type="string", length=20, nullable=false)
     */
    private $nbrepoints;

    /**
     * @var string
     *
     * @ORM\Column(name="dateCreation", type="string", length=20, nullable=false)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="dateExpiration", type="string", length=20, nullable=false)
     */
    private $dateexpiration;

    /**
     * @var integer
     *
     * @ORM\Column(name="activity", type="integer", nullable=false)
     */
    private $activity;

    /**
     * @var string
     *
     * @ORM\Column(name="design", type="string", length=20, nullable=false)
     */
    private $design;

    /**
     * @var string
     *
     * @ORM\Column(name="codeQR", type="string", length=20, nullable=false)
     */
    private $codeqr;

    /**
     * @var \Enseigne
     *
     * @ORM\ManyToOne(targetEntity="Enseigne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEnseigne", referencedColumnName="id_enseigne")
     * })
     */
    private $idenseigne;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @return int
     */
    public function getIdcarte()
    {
        return $this->idcarte;
    }

    /**
     * @param int $idcarte
     */
    public function setIdcarte($idcarte)
    {
        $this->idcarte = $idcarte;
    }

    /**
     * @return string
     */
    public function getNbrepoints()
    {
        return $this->nbrepoints;
    }

    /**
     * @param string $nbrepoints
     */
    public function setNbrepoints($nbrepoints)
    {
        $this->nbrepoints = $nbrepoints;
    }

    /**
     * @return string
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * @param string $datecreation
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;
    }

    /**
     * @return string
     */
    public function getDateexpiration()
    {
        return $this->dateexpiration;
    }

    /**
     * @param string $dateexpiration
     */
    public function setDateexpiration($dateexpiration)
    {
        $this->dateexpiration = $dateexpiration;
    }

    /**
     * @return int
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param int $activity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
    }

    /**
     * @return string
     */
    public function getDesign()
    {
        return $this->design;
    }

    /**
     * @param string $design
     */
    public function setDesign($design)
    {
        $this->design = $design;
    }

    /**
     * @return string
     */
    public function getCodeqr()
    {
        return $this->codeqr;
    }

    /**
     * @param string $codeqr
     */
    public function setCodeqr($codeqr)
    {
        $this->codeqr = $codeqr;
    }

    /**
     * @return \Enseigne
     */
    public function getIdenseigne()
    {
        return $this->idenseigne;
    }

    /**
     * @param \Enseigne $idenseigne
     */
    public function setIdenseigne($idenseigne)
    {
        $this->idenseigne = $idenseigne;
    }

    /**
     * @return \User
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \User $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    


}

