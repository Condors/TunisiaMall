<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event
 *
 * @author Amine
 */


namespace Condors\TnMallBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="id_Event", columns={"id_Event"}), @ORM\Index(name="dateDebut_event", columns={"dateDebut_Event"}), @ORM\Index(name="dateFin_Event", columns={"dateFin_Event"})})
 * @ORM\Entity(repositoryClass="Condors\TnMallBundle\Entity\EventRepository")
 */
class Event {
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id_Event;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_Event", type="string", length=100, nullable=false)
     */
    private $libelle_Event;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut_Event", type="date", nullable=false)
     */
    private $dateDebut_Event;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin_Event", type="date", nullable=false)
     */
    private $dateFin_Event;

    /**
     * @var string
     *
     * @ORM\Column(name="image_Event", type="string", length=255, nullable=true)
     */
    private $image_Event;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description_Event", type="string", nullable=false)
     */
    private $description_Event;

    /**
     * @var string
     *
     * @ORM\Column(name="dateOfCreation", type="date", length=255, nullable=true)
     */

    private $dateofcreation;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdmin", referencedColumnName="id")
     * })
     */
    
    private $idAdmin;
    
     /**
     * @Assert\File(maxSize="500k")
     */
    public $file;

    public function getWebPath() {
        return null === $this->image_Event ? null : $this->getUploadDir() . '/' . $this->image_Event;
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
        $this->file->move($this->getUploadRootDir(), md5($this->file->getClientOriginalName() . 'Event' . $randTime) . '.jpg');

        // On sauvegarde le nom de fichier
        $this->image_Event = md5($this->file->getClientOriginalName() . 'Event' . $randTime) . '.jpg';


        // La propriété file ne servira plus
        $this->file = null;

        
       
    }
    
    function getIdEvent() {
        return $this->id_Event;
    }

    function getLibelleEvent() {
        return $this->libelle_Event;
    }

    function getDateDebutEvent() {
        return $this->dateDebut_Event;
    }

    function getDateFinEvent() {
        return $this->dateFin_Event;
    }

    function getDescriptionEvent() {
        return $this->description_Event;
    }

    function getFile() {
        return $this->file;
    }
    
    function getImageEvent() {
        return $this->image_Event;
    }
    
    function getIdAdmin() {
        return $this->idAdmin;
    }
    
    function setIdAdmin($idAdmin) {
        $this->idAdmin = $idAdmin;
    }

    function setIdEvent($idEnseigne) {
        $this->idEnseigne = $idEnseigne;
    }

    function setLibelleEvent($libelleEvent) {
        $this->libelle_Event = $libelleEvent;
    }

    function setDescriptionEvent($descriptionEvent) {
        $this->description_Event = $descriptionEvent;
    }

    function setImageEvent($imageEvent) {
        $this->image_Event = $imageEvent;
    }

    function setDateDebutEvent($dateDebutEvent) {
        $this->dateDebut_Event = $dateDebutEvent;
    }

    function setFile($file) {
        $this->file = $file;
    }
    
    function setDateFinEvent($dateFinEvent) {
        $this->dateFin_Event = $dateFinEvent;
    }

}
