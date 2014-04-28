<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class BU
{
    /** 
    * @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\BA", inversedBy="bas") 
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
     * @ORM\Column(name="Nom_BA", type="string", length=255)
     */
    private $nomBU;

    /**
     * @var string
     *
     * @ORM\Column(name="service", type="string", length=255)
     */
    private $service;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Creation", type="date")
     */
    private $dateCreation;


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
     * Set nomBA
     *
     * @param string $nomBA
     * @return Post
     */
    public function setNomBU($nomBU)
    {
        $this->nomBU = $nomBU;

        return $this;
    }
    /**
     * Get nomBA
     *
     * @return string 
     */
    public function getNomBU()
    {
        return $this->nomBU;
    }
    
    /**
     * Set service
     *
     * @param string $service
     * @return Post
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
    /**
     * Get service
     *
     * @return string 
     */
    public function getService()
    {
        return $this->service;
    }

    

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Post
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
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
    return $this->nomBU;
   }

}
