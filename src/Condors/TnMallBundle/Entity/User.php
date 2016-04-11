<?php



namespace Condors\TnMallBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    

    
   

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=30, nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=30, nullable=false)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Anniversaire", type="date", nullable=false)
     */
    private $anniversaire;


    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=30, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_enseigne", type="integer", nullable=true)
     */
    private $idEnseigne;

    /**
     * @var boolean
     *
     * @ORM\Column(name="attente", type="boolean", nullable=false)
     */
    private $attente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bloquer", type="boolean", nullable=false)
     */
    private $bloquer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="supprimer", type="boolean", nullable=false)
     */
    private $supprimer;
    
     /**
     * @Assert\File(maxSize="500k")
     */
    public $file;
    
    
    
         /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", nullable=true)
     */
    private $facebookID;
 
    /**
     * @var string
     *
     * @ORM\Column(name="google_id", type="string", nullable=true)
     */
    private $googleID;
    
    
    

    function getFacebookID() {
        return $this->facebookID;
    }

    function getGoogleID() {
        return $this->googleID;
    }


    function setFacebookID($facebookID) {
        $this->facebookID = $facebookID;
    }

    function setGoogleID($googleID) {
        $this->googleID = $googleID;
    }

    
    public function getWebPath()
    {
        return null === $this->image ? null : $this->getUploadDir().'/'.$this->image;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
  
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/pictures';
    }
    
    public function uploadProfilePicture()
    {
        // Nous utilisons le nom de fichier original, donc il est dans la pratique 
        // nécessaire de le nettoyer pour éviter les problèmes de sécurité
        
        $nowTime = new \DateTime();
         
         $randTime=$nowTime->format('Y-m-d-H-i-s');

        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->file->move($this->getUploadRootDir(), md5($this->file->getClientOriginalName().''.$randTime).'.jpg');

        // On sauvegarde le nom de fichier
        $this->image =  md5($this->file->getClientOriginalName().''.$randTime).'.jpg';
        
        
        // La propriété file ne servira plus
        $this->file = null;
    }


    

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    function getId() {
        return $this->id;
    }

    function getCin() {
        return $this->cin;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getAnniversaire() {
        return $this->anniversaire;
       
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getImage() {
        return $this->image;
    }

    function getIdEnseigne() {
        return $this->idEnseigne;
    }

    function getAttente() {
        return $this->attente;
    }

    function getBloquer() {
        return $this->bloquer;
    }

    function getSupprimer() {
        return $this->supprimer;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCin($cin) {
        $this->cin = $cin;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setAnniversaire(\DateTime $anniversaire) {
        $this->anniversaire = $anniversaire;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setIdEnseigne($idEnseigne) {
        $this->idEnseigne = $idEnseigne;
    }

    function setAttente($attente) {
        $this->attente = $attente;
    }

    function setBloquer($bloquer) {
        $this->bloquer = $bloquer;
    }

    function setSupprimer($supprimer) {
        $this->supprimer = $supprimer;
    }


    
    

}
