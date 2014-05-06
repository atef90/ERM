<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */

class CurrentFunction
{   
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Function", type="string", length=255)
     */
    private $nameFunction;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameFunction
     *
     * @param string $Function
     * @return Post
     */
    public function setNameFunction($nameFunction)
    {
        $this->nameFunction = $nameFunction;

        return $this;
    }

    /**
     * Get Service
     *
     * @return string 
     */
    public function getNameFunction()
    {
        return $this->nameFunction;
    }
    
}
