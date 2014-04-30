<?php

namespace SocialFunding\Core\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SocialFunding\Core\SharedBundle\Repository\CampaignRepository")
 */
class Campaign
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
     * @ORM\ManyToOne(targetEntity="Ong", inversedBy="campaigns")
     * @ORM\JoinColumn(name="ong_id", referencedColumnName="id")
     */
    private $ong;

    /**
     * @ORM\OneToMany(targetEntity="Order", mappedBy="campaign")
     */
    private $orders;

    /**
     * @ORM\OneToMany(targetEntity="CampaignProducts", mappedBy="campaign", cascade={"persist"})
     */
    private $products;

    /**
     * @var string
     *
     * @ORM\Column(name="first_description", type="text")
     */
    private $firstDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="second_description", type="text")
     */
    private $secondDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="first_photo", type="string", nullable=true)
     */
    private $firstPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="second_photo", type="string", nullable=true)
     */
    private $secondPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="third_photo", type="string", nullable=true)
     */
    private $thirdPhoto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_approved", type="boolean")
     */
    private $isApproved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="initial_date", type="datetime")
     */
    private $initialDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="final_date", type="datetime")
     */
    private $finalDate;

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
     * Set ong
     *
     * @param \stdClass $ong
     * @return Campaign
     */
    public function setOng($ong)
    {
        $this->ong = $ong;

        return $this;
    }

    /**
     * Get ong
     *
     * @return \stdClass 
     */
    public function getOng()
    {
        return $this->ong;
    }

    /**
     * Set products
     *
     * @param array $products
     * @return Campaign
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return array 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Campaign
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
     * Set isApproved
     *
     * @param boolean $isApproved
     * @return Campaign
     */
    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    /**
     * Get isApproved
     *
     * @return boolean
     */
    public function getIsApproved()
    {
        return $this->isApproved;
    }

    /**
     * Set initialDate
     *
     * @param \DateTime $initialDate
     * @return Campaign
     */
    public function setInitialDate($initialDate)
    {
        $this->initialDate = $initialDate;

        return $this;
    }

    /**
     * Get initialDate
     *
     * @return \DateTime 
     */
    public function getInitialDate()
    {
        return $this->initialDate;
    }

    /**
     * Set finalDate
     *
     * @param \DateTime $finalDate
     * @return Campaign
     */
    public function setFinalDate($finalDate)
    {
        $this->finalDate = $finalDate;

        return $this;
    }

    /**
     * Get finalDate
     *
     * @return \DateTime 
     */
    public function getFinalDate()
    {
        return $this->finalDate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add products
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\CampaignProducts $products
     * @return Campaign
     */
    public function addProduct(\SocialFunding\Core\SharedBundle\Entity\CampaignProducts $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\CampaignProducts $products
     */
    public function removeProduct(\SocialFunding\Core\SharedBundle\Entity\CampaignProducts $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Add campaigns
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\Campaign $campaigns
     * @return Ong
     */
    public function addOrder(\SocialFunding\Core\SharedBundle\Entity\Order $order)
    {
        $this->orders[] = $order;

        return $this;
    }

    /**
     * Remove campaigns
     *
     * @param \SocialFunding\Core\SharedBundle\Entity\Campaign $campaigns
     */
    public function removeOrder(\SocialFunding\Core\SharedBundle\Entity\Order $order)
    {
        $this->orders->removeElement($order);
    }

    /**
     * Get campaigns
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param string $firstDescription
     */
    public function setFirstDescription($firstDescription)
    {
        $this->firstDescription = $firstDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstDescription()
    {
        return $this->firstDescription;
    }

    /**
     * @param string $secondDescription
     */
    public function setSecondDescription($secondDescription)
    {
        $this->secondDescription = $secondDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecondDescription()
    {
        return $this->secondDescription;
    }

    /**
     * @param string $firstPhoto
     */
    public function setFirstPhoto($firstPhoto)
    {
        $this->firstPhoto = $firstPhoto;
    }

    /**
     * @return string
     */
    public function getFirstPhoto()
    {
        return $this->firstPhoto;
    }

    /**
     * @param string $secondPhoto
     */
    public function setSecondPhoto($secondPhoto)
    {
        $this->secondPhoto = $secondPhoto;
    }

    /**
     * @return string
     */
    public function getSecondPhoto()
    {
        return $this->secondPhoto;
    }

    /**
     * @param string $thirdPhoto
     */
    public function setThirdPhoto($thirdPhoto)
    {
        $this->thirdPhoto = $thirdPhoto;
    }

    /**
     * @return string
     */
    public function getThirdPhoto()
    {
        return $this->thirdPhoto;
    }

    public function getFirstAbsolutePath()
    {
        return null === $this->firstPhoto
            ? null
            : $this->getFirstUploadRootDir().'/'.$this->firstPhoto;
    }

    public function getSecondAbsolutePath()
    {
        return null === $this->secondPhoto
            ? null
            : $this->getSecondUploadRootDir().'/'.$this->secondPhoto;
    }

    public function getThirdAbsolutePath()
    {
        return null === $this->thirdPhoto
            ? null
            : $this->getThirdUploadRootDir().'/'.$this->thirdPhoto;
    }

    public function getFirstWebPath()
    {
        return null === $this->firstPhoto
            ? null
            : $this->getFirstUploadDir().'/'.$this->firstPhoto;
    }

    public function getSecondWebPath()
    {
        return null === $this->secondPhoto
            ? null
            : $this->getSecondUploadDir().'/'.$this->secondPhoto;
    }

    public function getThirdWebPath()
    {
        return null === $this->thirdPhoto
            ? null
            : $this->getThirdUploadDir().'/'.$this->thirdPhoto;
    }

    protected function getFirstUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../../..'.$this->getFirstUploadDir();
    }

    protected function getSecondUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../../..'.$this->getSecondUploadDir();
    }

    protected function getThirdUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../../..'.$this->getThirdUploadDir();
    }

    protected function getFirstUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return '/socialfunding/web/uploads/campaigns';
    }

    protected function getSecondUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return '/socialfunding/web/uploads/campaigns';
    }

    protected function getThirdUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return '/socialfunding/web/uploads/campaigns';
    }

    public function upload($file, $number)
    {
        if (null === $file) {
            return;
        }
        $uniqId = uniqid();

        if ($number == 1) {
            $file->move(
                $this->getFirstUploadRootDir(),
                $uniqId . '_' . $file->getClientOriginalName()
            );
        } elseif ($number == 2) {
            $file->move(
                $this->getSecondUploadRootDir(),
                $uniqId . '_' . $file->getClientOriginalName()
            );
        } else {
            $file->move(
                $this->getThirdUploadRootDir(),
                $uniqId . '_' . $file->getClientOriginalName()
            );
        }

        if ($number == 1) {
            $this->firstPhoto = $uniqId . '_' . $file->getClientOriginalName();
        } elseif ($number == 2) {
            $this->secondPhoto = $uniqId . '_' . $file->getClientOriginalName();
        } else {
            $this->thirdPhoto = $uniqId . '_' . $file->getClientOriginalName();
        }
    }

}
