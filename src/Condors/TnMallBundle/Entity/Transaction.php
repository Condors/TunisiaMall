<?php
/**
 * Created by PhpStorm.
 * User: kimkim
 * Date: 18/04/16
 * Time: 05:28
 */

namespace Condors\TnMallBundle\Entity;

use Beelab\PaypalBundle\Entity\Transaction as BaseTransaction;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class Transaction extends BaseTransaction
{
    // if you need other properties, or relationships, add them here...
    private $myArray= array();

    /**
     * @return array
     */
    public function getMyArray()
    {
        return $this->myArray;
    }

    /**
     * @param array $myArray
     */
    public function setMyArray($myArray)
    {
        $this->myArray = $myArray;
    }
    
    

    public function getDescription()
    {
        // here you can return a generic description, if you don't want to list items
        return "Zven den Desc";
    }

    public function getItems()
    {
        // here you can return an array of items, with each item being an array of name, quantity, price
        // Note that if the total (price * quantity) of items doesn't match total amount, this won't work
        return $this->myArray;
    }

    public function getShippingAmount()
    {
        // here you can return shipping amount. This amount MUST be already in your total amount

    }
}