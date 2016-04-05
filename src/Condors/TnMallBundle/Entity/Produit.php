<?php

namespace Condors\TnMallBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="id_produit", columns={"id_produit"}), @ORM\Index(name="id_catalogue", columns={"id_catalogue"}), @ORM\Index(name="id_produit_2", columns={"id_produit", "id_catalogue"}), @ORM\Index(name="id_promotion", columns={"id_promotion"})})
 * @ORM\Entity(repositoryClass="Condors\TnMallBundle\Entity\ProduitRepository")
 */
class Produit {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var Catalogue
     *
     * @ORM\ManyToOne(targetEntity="Catalogue")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_catalogue", referencedColumnName="id_catalogue")
     * })
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
     * @ORM\Column(name="categorie_produit", type="string", length=255, nullable=true)
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

    /**
     * @Assert\File(maxSize="500k")
     */
    public $fileFront;
    /**
     * @Assert\File(maxSize="500k")
     */
    public $fileBack;
    /**
     * @Assert\File(maxSize="500k")
     */
    public $fileReel;

    public function getWebPath() {
        return null === $this->imageprodfront ? null : $this->getUploadDir() . '/' . $this->imageprodfront;
    }

    

    protected function getUploadRootDir() {
        // le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/pictures';
    }

    public function uploadProfilePicture() {
        // Nous utilisons le nom de fichier original, donc il est dans la pratique 
        // nécessaire de le nettoyer pour éviter les problèmes de sécurité

        $nowTime = new \DateTime();

        $randTime = $nowTime->format('Y-m-d-H-i-s');

        /* Front */
        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->fileFront->move($this->getUploadRootDir(), md5($this->fileFront->getClientOriginalName() . 'F' . $randTime) . '.jpg');

        // On sauvegarde le nom de fichier
        $this->imageprodfront = md5($this->fileFront->getClientOriginalName() . 'F' . $randTime) . '.jpg';


        // La propriété file ne servira plus
        $this->fileFront = null;

        /* End Front */
        
         /* Back */
        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->fileBack->move($this->getUploadRootDir(), md5($this->fileBack->getClientOriginalName() . 'B' . $randTime) . '.jpg');

        // On sauvegarde le nom de fichier
        $this->imageprodback = md5($this->fileBack->getClientOriginalName() . 'B' . $randTime) . '.jpg';


        // La propriété file ne servira plus
        $this->fileBack = null;

        /* End back */
        
        
           /* Reel */
        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->fileReel->move($this->getUploadRootDir(), md5($this->fileReel->getClientOriginalName() . 'R' . $randTime) . '.jpg');

        // On sauvegarde le nom de fichier
        $this->imageprodreel = md5($this->fileReel->getClientOriginalName() . 'R' . $randTime) . '.jpg';


        // La propriété file ne servira plus
        $this->fileReel = null;

        /* End back */
    }

    function getImageprodfront() {
        return $this->imageprodfront;
    }

    function getIdProduit() {
        return $this->idProduit;
    }

    function getIdCatalogue() {
        return $this->idCatalogue;
    }

    function getIdPromotion() {
        return $this->idPromotion;
    }

    function getLibelleProduit() {
        return $this->libelleProduit;
    }

    function getCategorieProduit() {
        return $this->categorieProduit;
    }

    function getRefProduit() {
        return $this->refProduit;
    }

    function getDescriptionProduit() {
        return $this->descriptionProduit;
    }

    function getTvaProduit() {
        return $this->tvaProduit;
    }

    function getPrixProduit() {
        return $this->prixProduit;
    }

    /* function getImageprodfront() {
      return $this->imageprodfront;
      } */

    function getImageprodback() {
        return $this->imageprodback;
    }

    function getImageprodreel() {
        return $this->imageprodreel;
    }

    function getDatecreation() {
        return $this->datecreation;
    }

    function setIdProduit($idProduit) {
        $this->idProduit = $idProduit;
    }

    function setIdCatalogue($idCatalogue) {
        $this->idCatalogue = $idCatalogue;
    }

    function setIdPromotion($idPromotion) {
        $this->idPromotion = $idPromotion;
    }

    function setLibelleProduit($libelleProduit) {
        $this->libelleProduit = $libelleProduit;
    }

    function setCategorieProduit($categorieProduit) {
        $this->categorieProduit = $categorieProduit;
    }

    function setRefProduit($refProduit) {
        $this->refProduit = $refProduit;
    }

    function setDescriptionProduit($descriptionProduit) {
        $this->descriptionProduit = $descriptionProduit;
    }

    function setTvaProduit($tvaProduit) {
        $this->tvaProduit = $tvaProduit;
    }

    function setPrixProduit($prixProduit) {
        $this->prixProduit = $prixProduit;
    }

    function setImageprodfront($imageprodfront) {
        $this->imageprodfront = $imageprodfront;
    }

    function setImageprodback($imageprodback) {
        $this->imageprodback = $imageprodback;
    }

    function setImageprodreel($imageprodreel) {
        $this->imageprodreel = $imageprodreel;
    }

    function setDatecreation(\DateTime $datecreation) {
        $this->datecreation = $datecreation;
    }

}
