<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseigne
 *
 * @ORM\Table(name="enseigne", indexes={@ORM\Index(name="id_enseigne", columns={"id_enseigne"}), @ORM\Index(name="id_responsable_enseigne", columns={"libelleEnseigne"}), @ORM\Index(name="id_responsable_enseigne_2", columns={"idResponsableEnseigne"}), @ORM\Index(name="id_enseigne_2", columns={"id_enseigne"}), @ORM\Index(name="id_enseigne_3", columns={"id_enseigne"})})
 * @ORM\Entity
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idResponsableEnseigne", referencedColumnName="id")
     * })
     */
    private $idresponsableenseigne;


}
