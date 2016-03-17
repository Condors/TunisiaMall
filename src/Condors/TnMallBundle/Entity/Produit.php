<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="id_produit", columns={"id_produit"}), @ORM\Index(name="id_catalogue", columns={"id_catalogue"}), @ORM\Index(name="id_produit_2", columns={"id_produit", "id_catalogue"}), @ORM\Index(name="id_promotion", columns={"id_promotion"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_catalogue", type="integer", nullable=true)
     */
    private $idCatalogue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_promotion", type="integer", nullable=true)
     */
    private $idPromotion;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_produit", type="string", length=255, nullable=false)
     */
    private $libelleProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_produit", type="string", length=255, nullable=false)
     */
    private $categorieProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_produit", type="string", length=255, nullable=false)
     */
    private $refProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="description_produit", type="text", length=65535, nullable=false)
     */
    private $descriptionProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="tva_produit", type="integer", nullable=false)
     */
    private $tvaProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_produit", type="integer", nullable=false)
     */
    private $prixProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="imageProdFront", type="string", length=255, nullable=true)
     */
    private $imageprodfront;

    /**
     * @var string
     *
     * @ORM\Column(name="imageProdBack", type="string", length=255, nullable=true)
     */
    private $imageprodback;

    /**
     * @var string
     *
     * @ORM\Column(name="imageProdReel", type="string", length=255, nullable=true)
     */
    private $imageprodreel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=true)
     */
    private $datecreation;


}
