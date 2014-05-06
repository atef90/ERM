<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class BA
{
    /** 
    * @ORM\OneToMany(targetEntity="Acme\DemoBundle\Entity\BU", mappedBy="ba") 
    */  
    private $bus;

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
     * @ORM\Column(name="Name_BA", type="string", length=255)
     */
    private $nameBA;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date")
     */
    private $createdAt;


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
     * Set nameBA
     *
     * @param string $nameBA
     * @return Post
     */
    public function setNameBA($nameBA)
    {
        $this->nameBA = $nameBA;

        return $this;
    }

    /**
     * Get nameBA
     *
     * @return string 
     */
    public function getNameBA()
    {
        return $this->nameBA;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Post
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bus = new \Doctrine\Common\Collections\ArrayCollection();
       
    }

    /**
     * Add bus
     *
     * @param \Acme\DemoBundle\Entity\BU $bus
     * @return BA
     */
    public function addBus(\Acme\DemoBundle\Entity\BU $bus)
    {
        $this->bus[] = $bus;

        return $this;
    }

    /**
     * Remove bus
     *
     * @param \Acme\DemoBundle\Entity\BU $bus
     */
    public function removeBus(\Acme\DemoBundle\Entity\BU $bus)
    {
        $this->bus->removeElement($bus);
    }

    /**
     * Get bus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBu()
    {
        return $this->bus;
    }

    public function __toString()
   {
    return $this->nameBA;
   }


}
