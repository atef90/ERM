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
     * @ORM\Column(name="Nom_BA", type="string", length=255)
     */
    private $nomBA;

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
    public function setNomBA($nomBA)
    {
        $this->nomBA = $nomBA;

        return $this;
    }

    /**
     * Get nomBA
     *
     * @return string 
     */
    public function getNomBA()
    {
        return $this->nomBA;
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
    return $this->nomBA;
   }
}
