<?php

namespace SocialFunding\Core\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * IntegrationEnginePartner
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class IntegrationEnginePartner
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
     * @ORM\ManyToOne(targetEntity="IntegrationEngine", inversedBy="partners", cascade={"persist"})
     * @ORM\JoinColumn(name="integration_engine_id", referencedColumnName="id")
     */
    protected $integrationEngine;

    /**
     * @ORM\OneToMany(targetEntity="IntegrationEngineCategory", mappedBy="integrationEnginePartner")
     */
    protected $categories;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="integrationEnginePartner")
     */
    protected $products;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="partnerId", type="integer")
     */
    private $partnerId;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return IntegrationEnginePartner
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
     * Set partnerId
     *
     * @param integer $partnerId
     * @return IntegrationEnginePartner
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    /**
     * Get partnerId
     *
     * @return integer 
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Set integrationEngine
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\IntegrationEngine $integrationEngine
     * @return IntegrationEnginePartner
     */
    public function setIntegrationEngine(\SocialFunding\Core\SharedBundle\Entity\IntegrationEngine $integrationEngine = null)
    {
        $this->integrationEngine = $integrationEngine;

        return $this;
    }

    /**
     * Get integrationEngine
     *
     * @return \SocialFunding\Core\SharedBundle\Entity\IntegrationEngine 
     */
    public function getIntegrationEngine()
    {
        return $this->integrationEngine;
    }

    /**
     * Add categories
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\IntegrationEngineCategory $categories
     * @return IntegrationEnginePartner
     */
    public function addCategory(\SocialFunding\Core\SharedBundle\Entity\IntegrationEngineCategory $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\IntegrationEngineCategory $categories
     */
    public function removeCategory(\SocialFunding\Core\SharedBundle\Entity\IntegrationEngineCategory $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add products
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\Product $products
     * @return IntegrationEnginePartner
     */
    public function addProduct(\SocialFunding\Core\SharedBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\Product $products
     */
    public function removeProduct(\SocialFunding\Core\SharedBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
}
