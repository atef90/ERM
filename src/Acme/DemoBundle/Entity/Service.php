<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Service
{   
    /** 
    * @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\BU") 
    * @ORM\JoinColumn(nullable=false) */ 
     private $bu;
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
     * @ORM\Column(name="Name_Service", type="string", length=255)
     */
    private $nameService;

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
     * Set nameService
     *
     * @param string $Service
     * @return Post
     */
    public function setNameService($nameService)
    {
        $this->nameService = $nameService;

        return $this;
    }

    /**
     * Get Service
     *
     * @return string 
     */
    public function getNameService()
    {
        return $this->nameService;
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
     * Set bu
     *
     * @param \Acme\DemoBundle\Entity\BU $bu
     * @return Service
     */
    public function setBu(\Acme\DemoBundle\Entity\BU $bu)
    {
        $this->bu = $bu;

        return $this;
    }

    /**
     * Get bu
     *
     * @return \Acme\DemoBundle\Entity\BU 
     */
    public function getBu()
    {
        return $this->bu;
    }
    public function __toString()
   {
    return $this->nameService;
   }
}
