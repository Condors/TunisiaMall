<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignepaniercommande
 *
 * @ORM\Table(name="lignepaniercommande", indexes={@ORM\Index(name="id_ligne", columns={"id_ligne"}), @ORM\Index(name="id_panier", columns={"id_panier"}), @ORM\Index(name="id_commande", columns={"id_commande"}), @ORM\Index(name="id_produit", columns={"id_produit"}), @ORM\Index(name="id_panier_2", columns={"id_panier"})})
 * @ORM\Entity
 */
class Lignepaniercommande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ligne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLigne;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_panier", type="integer", nullable=true)
     */
    private $idPanier;

    /**
     * @var string
     *
     * @ORM\Column(name="id_commande", type="string", length=255, nullable=true)
     */
    private $idCommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     */
    private $idProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
   private $quantite;

    /**
     * @return int
     */
    public function getIdLigne()
    {
        return $this->idLigne;
    }

    /**
     * @param int $idLigne
     */
    public function setIdLigne($idLigne)
    {
        $this->idLigne = $idLigne;
    }

    /**
     * @return int
     */
    public function getIdPanier()
    {
        return $this->idPanier;
    }

    /**
     * @param int $idPanier
     */
    public function setIdPanier($idPanier)
    {
        $this->idPanier = $idPanier;
    }

    /**
     * @return string
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * @param string $idCommande
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param int $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }


}
