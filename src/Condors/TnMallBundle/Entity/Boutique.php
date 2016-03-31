<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boutique
 *
 * @ORM\Table(name="boutique", indexes={@ORM\Index(name="id_boutique", columns={"id_boutique"}), @ORM\Index(name="id_enseigne", columns={"libelle_boutique"}), @ORM\Index(name="id_boutique_2", columns={"id_boutique"}), @ORM\Index(name="description_boutique", columns={"description_boutique"}), @ORM\Index(name="description_boutique_2", columns={"description_boutique"}), @ORM\Index(name="description_boutique_3", columns={"description_boutique"}), @ORM\Index(name="description_boutique_4", columns={"description_boutique"})})
 * @ORM\Entity
 */
class Boutique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_boutique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBoutique;

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
     * @ORM\Column(name="description_boutique", type="string", length=40, nullable=false)
     */
    private $descriptionBoutique;

    /**
     * @var string
     *
     * @ORM\Column(name="imageBoutique", type="string", length=255, nullable=true)
     */
    private $imageboutique;

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


}
