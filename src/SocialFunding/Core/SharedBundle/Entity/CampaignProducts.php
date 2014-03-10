<?php

namespace SocialFunding\Core\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * CampaingProducts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SocialFunding\Core\SharedBundle\Repository\CampaignProductsRepository")
 */
class CampaignProducts
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
     * @ORM\ManyToOne(targetEntity="Campaign", inversedBy="products")
     * @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     */
    private $campaign;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="campaignProducts")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @var integer
     *
     * @ORM\Column(name="remote_id", type="integer")
     */
    private $remoteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_purchased", type="integer")
     */
    private $quantityPurchased;

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
     * Set campaign
     *
     * @param \stdClass $campaign
     * @return CampaingProducts
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return \stdClass 
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set remoteId
     *
     * @param integer $remoteId
     * @return CampaingProducts
     */
    public function setRemoteId($remoteId)
    {
        $this->remoteId = $remoteId;

        return $this;
    }

    /**
     * Get remoteId
     *
     * @return integer 
     */
    public function getRemoteId()
    {
        return $this->remoteId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return CampaingProducts
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantityPurchased
     *
     * @param integer $quantityPurchased
     * @return CampaingProducts
     */
    public function setQuantityPurchased($quantityPurchased)
    {
        $this->quantityPurchased = $quantityPurchased;

        return $this;
    }

    /**
     * Get quantityPurchased
     *
     * @return integer 
     */
    public function getQuantityPurchased()
    {
        return $this->quantityPurchased;
    }

    /**
     * Set product
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\Product $product
     * @return CampaignProducts
     */
    public function setProduct(\SocialFunding\Core\SharedBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \SocialFunding\Core\SharedBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
