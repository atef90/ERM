<?php
namespace Acme\DemoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
*/
class UserFunction
{
 /**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
    protected $id;

/**
* @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\CurrentFunction")
*/
private $functionEmployee;
/**
* @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
*/
private $user;

/**
   * @ORM\Column(name="begin_date", type="date",nullable=true)
   */
  private $beginDate;
  /**
   * @ORM\Column(name="end_date", type="date",nullable=true)
   */
  private $endDate;

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     * @return UserFunction
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime 
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return UserFunction
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }


    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return UserFunction
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
   

    /**
     * Set functionEmployee
     *
     * @param \Acme\DemoBundle\Entity\CurrentFunction $functionEmployee
     * @return UserFunction
     */
    public function setFunctionEmployee(\Acme\DemoBundle\Entity\CurrentFunction $functionEmployee)
    {
        $this->functionEmployee = $functionEmployee;

        return $this;
    }

    /**
     * Get functionEmployee
     *
     * @return \Acme\DemoBundle\Entity\CurrentFunction 
     */
    public function getFunctionEmployee()
    {
        return $this->functionEmployee;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
