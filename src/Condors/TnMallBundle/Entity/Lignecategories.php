<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignecategories
 *
 * @ORM\Table(name="ligneCategories", indexes={@ORM\Index(name="idcategories", columns={"idcategories", "idproduit"}), @ORM\Index(name="idproduit", columns={"idproduit"}), @ORM\Index(name="IDX_F7D7EB2DF75A5B52", columns={"idcategories"})})
 * @ORM\Entity
 */
class Lignecategories
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
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproduit", referencedColumnName="id_produit")
     * })
     */
    private $idproduit;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcategories", referencedColumnName="id")
     * })
     */
    private $idcategories;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \Produit
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * @param \Produit $idproduit
     */
    public function setIdproduit($idproduit)
    {
        $this->idproduit = $idproduit;
    }

    /**
     * @return \Categories
     */
    public function getIdcategories()
    {
        return $this->idcategories;
    }

    /**
     * @param \Categories $idcategories
     */
    public function setIdcategories($idcategories)
    {
        $this->idcategories = $idcategories;
    }
    
    


}
