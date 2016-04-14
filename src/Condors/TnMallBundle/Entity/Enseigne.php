<?php
namespace Condors\TnMallBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Enseigne
 *
 * @ORM\Table(name="enseigne", indexes={@ORM\Index(name="id_enseigne", columns={"id_enseigne"}), @ORM\Index(name="id_responsable_enseigne", columns={"libelleEnseigne"}), @ORM\Index(name="id_responsable_enseigne_2", columns={"idResponsableEnseigne"}), @ORM\Index(name="id_enseigne_2", columns={"id_enseigne"}), @ORM\Index(name="id_enseigne_3", columns={"id_enseigne"})})
 * @ORM\Entity(repositoryClass="Condors\TnMallBundle\Entity\EnseigneRepository")
 */
class Enseigne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_enseigne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEnseigne;
    /**
     * @var string
     *
     * @ORM\Column(name="libelleEnseigne", type="string", length=15, nullable=false)
     */
    private $libelleenseigne;
    /**
     * @var string
     *
     * @ORM\Column(name="descriptionEnseigne", type="string", length=255, nullable=false)
     */
    private $descriptionenseigne;
    /**
     * @var string
     *
     * @ORM\Column(name="imageEnseigne", type="string", length=255, nullable=true)
     */
    private $imageenseigne;
    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idResponsableEnseigne", referencedColumnName="id")
     * })
     */
    private $idresponsableenseigne;
    
     /**
     * @Assert\File(maxSize="500k")
     */
    public $file;
    public function getWebPath() {
        return null === $this->imageenseigne ? null : $this->getUploadDir() . '/' . $this->imageenseigne;
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
      
        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->file->move($this->getUploadRootDir(), md5($this->file->getClientOriginalName() . 'Brand' . $randTime) . '.jpg');
        // On sauvegarde le nom de fichier
        $this->imageenseigne = md5($this->file->getClientOriginalName() . 'Brand' . $randTime) . '.jpg';
        // La propriété file ne servira plus
        $this->file = null;
        
       
    }
    
    
    
    function getIdEnseigne() {
        return $this->idEnseigne;
    }
    function getLibelleenseigne() {
        return $this->libelleenseigne;
    }
    function getDescriptionenseigne() {
        return $this->descriptionenseigne;
    }
    function getImageenseigne() {
        return $this->imageenseigne;
    }
    function getIdresponsableenseigne() {
        return $this->idresponsableenseigne;
    }
    function getFile() {
        return $this->file;
    }
    function setIdEnseigne($idEnseigne) {
        $this->idEnseigne = $idEnseigne;
    }
    function setLibelleenseigne($libelleenseigne) {
        $this->libelleenseigne = $libelleenseigne;
    }
    function setDescriptionenseigne($descriptionenseigne) {
        $this->descriptionenseigne = $descriptionenseigne;
    }
    function setImageenseigne($imageenseigne) {
        $this->imageenseigne = $imageenseigne;
    }
    function setIdresponsableenseigne(User $idresponsableenseigne) {
        $this->idresponsableenseigne = $idresponsableenseigne;
    }
    function setFile($file) {
        $this->file = $file;
    }
}