<?php
/**
 * Created by PhpStorm.
 * User: sooheib
 * Date: 5/9/16
 * Time: 2:10 PM
 */

namespace Condors\TnMallBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Mremi\ContactBundle\Entity\Contact as BaseContact;

class Contact extends BaseContact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}