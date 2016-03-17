<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="pack", indexes={@ORM\Index(name="id_pack", columns={"id_pack"}), @ORM\Index(name="id_admin", columns={"id_admin"}), @ORM\Index(name="id_admin_2", columns={"id_admin"}), @ORM\Index(name="id_pack_2", columns={"id_pack", "id_admin"})})
 * @ORM\Entity
 */
class Pack
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pack", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPack;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_admin", type="integer", nullable=false)
     */
    private $idAdmin;


}
