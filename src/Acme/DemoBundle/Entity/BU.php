<?php

namespace Acme\DemoBundle\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 *@DoctrineAssert\UniqueEntity(fields="nameBU", message="A Speciality with same Business Unit already exists", groups={"test"})
 * @ORM\Entity
 */
class BU
{
    /** 
    * @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\BA") 
    * @ORM\JoinColumn(nullable=false) */ 
     private $ba;

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
     * @ORM\Column(name="Name_BU", type="string", length=255)
     */
    private $nameBU;

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
     * Set nameBU
     *
     * @param string $nameBU
     * @return Post
     */
    public function setNameBU($nameBU)
    {
        $this->nameBU = $nameBU;

        return $this;
    }
    /**
     * Get nameBU
     *
     * @return string 
     */
    public function getNameBU()
    {
        return $this->nameBU;
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
     * Set ba
     *
     * @param \Acme\DemoBundle\Entity\BA $ba
     * @return BU
     */
    public function setBa(\Acme\DemoBundle\Entity\BA $ba)
    {
        $this->ba = $ba;

        return $this;
    }

    /**
     * Get ba
     *
     * @return \Acme\DemoBundle\Entity\BA 
     */
    public function getBa()
    {
        return $this->ba;
    }

    
    public function __toString()
   {
    return $this->nameBU;
   }
}
