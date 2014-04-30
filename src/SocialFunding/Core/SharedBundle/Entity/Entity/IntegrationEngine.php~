<?php

namespace SocialFunding\Core\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * IntegrationEngine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class IntegrationEngine
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\OneToMany(targetEntity="IntegrationEnginePartner", mappedBy="integrationEngine", cascade={"persist"})
     */
    protected $partners;

    public function __construct()
    {
        $this->partners = new ArrayCollection();
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

    /**
     * Set name
     *
     * @param string $name
     * @return IntegrationEngine
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return IntegrationEngine
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add partners
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\IntegrationEnginePartner $partners
     * @return IntegrationEngine
     */
    public function addPartner(\SocialFunding\Core\SharedBundle\Entity\IntegrationEnginePartner $partners)
    {
        $this->partners[] = $partners;

        return $this;
    }

    /**
     * Remove partners
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\IntegrationEnginePartner $partners
     */
    public function removePartner(\SocialFunding\Core\SharedBundle\Entity\IntegrationEnginePartner $partners)
    {
        $this->partners->removeElement($partners);
    }

    /**
     * Get partners
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPartners()
    {
        return $this->partners;
    }
}
