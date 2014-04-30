<?php

namespace SocialFunding\Core\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * IntegrationEngineCategory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SocialFunding\Core\SharedBundle\Repository\IntegrationEngineCategoryRepository")
 */
class IntegrationEngineCategory
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
     * @ORM\ManyToOne(targetEntity="IntegrationEnginePartner", inversedBy="categories")
     * @ORM\JoinColumn(name="integration_engine_partner_id", referencedColumnName="id")
     */
    private $integrationEnginePartner;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryId", type="integer")
     */
    private $categoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentId", type="integer")
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="departamentId", type="integer")
     */
    private $departamentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    public function __construct()
    {
        $this->products = new ArrayCollection();
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
     * Set integrationEnginePartner
     *
     * @param \stdClass $integrationEnginePartner
     * @return IntegrationEngineCategory
     */
    public function setIntegrationEnginePartner($integrationEnginePartner)
    {
        $this->integrationEnginePartner = $integrationEnginePartner;

        return $this;
    }

    /**
     * Get integrationEnginePartner
     *
     * @return \stdClass 
     */
    public function getIntegrationEnginePartner()
    {
        return $this->integrationEnginePartner;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return IntegrationEngineCategory
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return IntegrationEngineCategory
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set departamentId
     *
     * @param integer $departamentId
     * @return IntegrationEngineCategory
     */
    public function setDepartamentId($departamentId)
    {
        $this->departamentId = $departamentId;

        return $this;
    }

    /**
     * Get departamentId
     *
     * @return integer 
     */
    public function getDepartamentId()
    {
        return $this->departamentId;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return IntegrationEngineCategory
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return IntegrationEngineCategory
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
}
