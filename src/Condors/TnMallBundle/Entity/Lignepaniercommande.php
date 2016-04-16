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


}
