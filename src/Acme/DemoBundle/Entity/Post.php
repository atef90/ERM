<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Post
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
}
