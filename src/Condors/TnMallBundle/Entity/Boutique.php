<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Boutique
 *
 * @ORM\Table(name="boutique", indexes={@ORM\Index(name="id_boutique", columns={"id_boutique"}), @ORM\Index(name="id_enseigne", columns={"libelle_boutique"}), @ORM\Index(name="id_boutique_2", columns={"id_boutique"}), @ORM\Index(name="description_boutique", columns={"description_boutique"}), @ORM\Index(name="description_boutique_2", columns={"description_boutique"}), @ORM\Index(name="description_boutique_3", columns={"description_boutique"}), @ORM\Index(name="description_boutique_4", columns={"description_boutique"})})
 * @ORM\Entity(repositoryClass="Condors\TnMallBundle\Entity\BoutiqueRepository")
 */
class Boutique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_boutique", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBoutique;

    /**
     * @var Enseigne
     *
     * @ORM\ManyToOne(targetEntity="Enseigne")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_enseigne", referencedColumnName="id_enseigne")
     * })
     */
    private $idEnseigne;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="libelle_boutique", type="string", length=15, nullable=false)
     */
    private $libelleBoutique;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_boutique", type="string", length=15, nullable=false)
     */
    private $categorieBoutique;

    /**
     * @var string
     *
     * @ORM\Column(name="description_boutique", type="string", length=200, nullable=false)
     */
    private $descriptionBoutique;

    /**
     * @var string
     *
     * @ORM\Column(name="image1", type="string", length=255, nullable=true)
     */
    private $image1;

    /**
     * @var string
     *
     * @ORM\Column(name="image2", type="string", length=255, nullable=true)
     */
    private $image2;

    /**
     * @var string
     *
     * @ORM\Column(name="image3", type="string", length=255, nullable=true)
     */
    private $image3;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=11, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=true)
     */
    private $datecreation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imageB", type="string", length=255, nullable=true)
     */
    private $imageB;

    /**
     * @Assert\File(maxSize="500k")
     */
    public $file1;
    /**
     * @Assert\File(maxSize="500k")
     */
    public $file2;
    /**
     * @Assert\File(maxSize="500k")
     */
    public $file3;

    /**
     * @return int
     */
    public function getIdBoutique()
    {
        return $this->idBoutique;
    }

    /**
     * @param int $idBoutique
     */
    public function setIdBoutique($idBoutique)
    {
        $this->idBoutique = $idBoutique;
    }

    /**
     * @return Enseigne
     */
    public function getIdEnseigne()
    {
        return $this->idEnseigne;
    }

    /**
     * @param Enseigne $idEnseigne
     */
    public function setIdEnseigne($idEnseigne)
    {
        $this->idEnseigne = $idEnseigne;
    }

    /**
     * @return string
     */
    public function getLibelleBoutique()
    {
        return $this->libelleBoutique;
    }

    /**
     * @param string $libelleBoutique
     */
    public function setLibelleBoutique($libelleBoutique)
    {
        $this->libelleBoutique = $libelleBoutique;
    }

    /**
     * @return string
     */
    public function getCategorieBoutique()
    {
        return $this->categorieBoutique;
    }

    /**
     * @param string $categorieBoutique
     */
    public function setCategorieBoutique($categorieBoutique)
    {
        $this->categorieBoutique = $categorieBoutique;
    }

    /**
     * @return string
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * @param string $image1
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;
    }

    /**
     * @return string
     */
    public function getDescriptionBoutique()
    {
        return $this->descriptionBoutique;
    }

    /**
     * @param string $descriptionBoutique
     */
    public function setDescriptionBoutique($descriptionBoutique)
    {
        $this->descriptionBoutique = $descriptionBoutique;
    }

    /**
     * @return string
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * @param string $image2
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;
    }

    /**
     * @return string
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * @param string $image3
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;
    }

    /**
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * @param \DateTime $datecreation
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;
    }

    /**
     * @return mixed
     */
    public function getImageB()
    {
        return $this->imageB;
    }

    /**
     * @param mixed $imageB
     */
    public function setImageB($imageB)
    {
        $this->imageB = $imageB;
    }
    
    
    
    /**
     * @return mixed
     */
    public function getFile1()
    {
        return $this->file1;
    }

    /**
     * @param mixed $file1
     */
    public function setFile1($file1)
    {
        $this->file1 = $file1;
    }

    /**
     * @return mixed
     */
    public function getFile2()
    {
        return $this->file2;
    }

    /**
     * @param mixed $file2
     */
    public function setFile2($file2)
    {
        $this->file2 = $file2;
    }

    /**
     * @return mixed
     */
    public function getFile3()
    {
        return $this->file3;
    }

    /**
     * @param mixed $file3
     */
    public function setFile3($file3)
    {
        $this->file3 = $file3;
    }



    public function getWebPath() {
        return null === $this->image1 ? null : $this->getUploadDir() . '/' . $this->image1;
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

        /* image1 */
        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->file1->move($this->getUploadRootDir(), md5($this->file1->getClientOriginalName() . 'Store1' . $randTime) . '.jpg');

        // On sauvegarde le nom de fichier
        $this->image1 = md5($this->file1->getClientOriginalName() . 'Store1' . $randTime) . '.jpg';


        // La propriété file ne servira plus
        $this->file1 = null;

        /* End image1 */

        /* image2 */
        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->file2->move($this->getUploadRootDir(), md5($this->file2->getClientOriginalName() . 'Store2' . $randTime) . '.jpg');

        // On sauvegarde le nom de fichier
        $this->image2 = md5($this->file2->getClientOriginalName() . 'Store2' . $randTime) . '.jpg';


        // La propriété file ne servira plus
        $this->file2 = null;
        /* End image2 */

        /* image3 */
        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->file3->move($this->getUploadRootDir(), md5($this->file3->getClientOriginalName() . 'Store3' . $randTime) . '.jpg');

        // On sauvegarde le nom de fichier
        $this->image3 = md5($this->file3->getClientOriginalName() . 'Store3' . $randTime) . '.jpg';

        // La propriété file ne servira plus
        $this->file3 = null;
        /* image3 */
    }

}
