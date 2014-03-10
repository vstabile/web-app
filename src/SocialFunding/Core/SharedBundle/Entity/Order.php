<?php

namespace SocialFunding\Core\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use SocialFunding\Core\SharedBundle\Entity\OrderStatus;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Order
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
     * @ORM\ManyToOne(targetEntity="Costumer", inversedBy="orders")
     * @ORM\JoinColumn(name="costumer_id", referencedColumnName="id")
     */
    private $costumer;

    /**
     * @ORM\ManyToOne(targetEntity="Campaign", inversedBy="orders")
     * @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     */
    private $campaign;

    /**
     * @ORM\OneToMany(targetEntity="OrderProduct", mappedBy="order")
     */
    private $orderProducts;

    /**
     * Unidirectional - Many users have marked many comments as read
     *
     * @ORM\ManyToMany(targetEntity="OrderStatus")
     * @ORM\JoinTable(name="order_status_list",
     *   joinColumns={@ORM\JoinColumn(name="order_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="order_status_id", referencedColumnName="id")}
     * )
     */
    private $orderStatus;


    /**
     * @var float
     *
     * @ORM\Column(name="total_price", type="float")
     */
    private $totalPrice;

    /**
     * @var float
     *
     * @ORM\Column(name="total_quantity", type="integer")
     */
    private $totalQuantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
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
     * Constructor
     */
    public function __construct()
    {
        $this->orderProducts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->createdAt = new \DateTime('now');
    }

    /**
     * Add products
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\CampaignProducts $products
     * @return Campaign
     */
    public function addProduct(\SocialFunding\Core\SharedBundle\Entity\OrderProduct $orderProduct)
    {
        $this->orderProducts[] = $orderProduct;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\CampaignProducts $products
     */
    public function removeProduct(\SocialFunding\Core\SharedBundle\Entity\OrderProduct $orderProduct)
    {
        $this->orderProducts->removeElement($orderProduct);
    }

    /**
     * @param mixed $campaign
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * @return mixed
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * @param mixed $costumer
     */
    public function setCostumer($costumer)
    {
        $this->costumer = $costumer;
    }

    /**
     * @return mixed
     */
    public function getCostumer()
    {
        return $this->costumer;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $orderProducts
     */
    public function setOrderProducts($orderProducts)
    {
        $this->orderProducts = $orderProducts;
    }

    /**
     * @return mixed
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param float $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param float $totalQuantity
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->totalQuantity = $totalQuantity;
    }

    /**
     * @return float
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

}
