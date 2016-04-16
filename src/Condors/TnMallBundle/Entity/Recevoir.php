<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recevoir
 *
 * @ORM\Table(name="recevoir", indexes={@ORM\Index(name="id_recevoir", columns={"id_recevoir", "id_suivre", "id_notification"}), @ORM\Index(name="id_suivre", columns={"id_suivre", "id_notification"}), @ORM\Index(name="id_notification", columns={"id_notification"})})
 * @ORM\Entity
 */
class Recevoir
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_recevoir", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecevoir;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_suivre", type="integer", nullable=false)
     */
    private $idSuivre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_notification", type="integer", nullable=false)
     */
    private $idNotification;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vu", type="boolean", nullable=false)
     */
    private $vu;


}
