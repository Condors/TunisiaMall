<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="id_notification", columns={"id_notification"}), @ORM\Index(name="id_enseigne", columns={"id_enseigne"}), @ORM\Index(name="id_notification_2", columns={"id_notification"}), @ORM\Index(name="id_enseigne_2", columns={"id_enseigne"})})
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_notification", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotification;

    /**
     * @var \Enseigne
     *
     * @ORM\ManyToOne(targetEntity="Enseigne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_enseigne", referencedColumnName="id_enseigne")
     * })
     */
    private $idEnseigne;

    /**
     * @return int
     */
    public function getIdNotification()
    {
        return $this->idNotification;
    }

    /**
     * @param int $idNotification
     */
    public function setIdNotification($idNotification)
    {
        $this->idNotification = $idNotification;
    }

    /**
     * @return \Enseigne
     */
    public function getIdEnseigne()
    {
        return $this->idEnseigne;
    }

    /**
     * @param \Enseigne $idEnseigne
     */
    public function setIdEnseigne($idEnseigne)
    {
        $this->idEnseigne = $idEnseigne;
    }


    

}

