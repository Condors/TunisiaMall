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
     * @var integer
     *
     * @ORM\Column(name="id_enseigne", type="integer", nullable=false)
     */
    private $idEnseigne;


}
