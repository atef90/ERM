<?php

namespace Acme\DemoBundle\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @DoctrineAssert\UniqueEntity(fields="nameBA", message="A Speciality with same Business Area already exists", groups={"test"})
 * @ORM\Entity
 */
class BA
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
    
  
    public function __toString()
   {
    return $this->nameBA;
   }
   
}
