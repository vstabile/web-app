<?php

namespace SocialFunding\Core\SharedBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ong
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Costumer extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Order", mappedBy="costumer")
     */
    private $orders;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    protected $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="celphone", type="string", length=255)
     */
    protected $celphone;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="integer", length=8)
     */
    protected $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    protected $address;

    /**
     * @var string
     *
     * @ORM\Column(name="complement", type="string", length=255)
     */
    protected $complement;

    /**
     * @var string
     *
     * @ORM\Column(name="neighborhood", type="string", length=255)
     */
    protected $neighborhood;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=2)
     */
    protected $state;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_installmentcount", type="integer", length=2)
     */
    protected $ccInstallmentcount;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_expiration_month", type="string", length=255)
     */
    protected $ccExpirationMonth;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_expiration_year", type="integer", length=4)
     */
    protected $ccExpirationYear;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_holder", type="string", length=255)
     */
    protected $ccHolder;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_number", type="string", length=255)
     */
    protected $ccNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_id_number", type="integer", length=11)
     */
    protected $ccIdNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_id_name", type="string", length=255)
     */
    protected $ccIdName;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_security", type="integer", length=4)
     */
    protected $ccSecurity;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookId", type="string", length=255)
     */
    protected $facebookId;

    public function __construct()
    {
        parent::__construct();
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function serialize()
    {
        return serialize(array($this->facebookId, parent::serialize()));
    }

    public function unserialize($data)
    {
        list($this->facebookId, $parentData) = unserialize($data);
        parent::unserialize($parentData);
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get the full name of the user (first + last name)
     * @return string
     */
    public function getFullName()
    {
        return $this->getFirstName() . ' ' . $this->getLastname();
    }

    /**
     * @param string $facebookId
     * @return void
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
        $this->setUsername($facebookId);
        $this->salt = '';
    }

    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * @param Array
     */
    public function setFBData($fbdata)
    {
        if (isset($fbdata['id'])) {
            $this->setFacebookId($fbdata['id']);
            $this->addRole('ROLE_FACEBOOK');
        }
        if (isset($fbdata['first_name'])) {
            $this->setFirstname($fbdata['first_name']);
        }
        if (isset($fbdata['last_name'])) {
            $this->setLastname($fbdata['last_name']);
        }
        if (isset($fbdata['email'])) {
            $this->setEmail($fbdata['email']);
        }
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $ccExpirationMonth
     */
    public function setCcExpirationMonth($ccExpirationMonth)
    {
        $this->ccExpirationMonth = $ccExpirationMonth;
    }

    /**
     * @return string
     */
    public function getCcExpirationMonth()
    {
        return $this->ccExpirationMonth;
    }

    /**
     * @param string $ccExpirationYear
     */
    public function setCcExpirationYear($ccExpirationYear)
    {
        $this->ccExpirationYear = $ccExpirationYear;
    }

    /**
     * @return string
     */
    public function getCcExpirationYear()
    {
        return $this->ccExpirationYear;
    }

    /**
     * @param string $ccHolder
     */
    public function setCcHolder($ccHolder)
    {
        $this->ccHolder = $ccHolder;
    }

    /**
     * @return string
     */
    public function getCcHolder()
    {
        return $this->ccHolder;
    }

    /**
     * @param string $ccIdName
     */
    public function setCcIdName($ccIdName)
    {
        $this->ccIdName = $ccIdName;
    }

    /**
     * @return string
     */
    public function getCcIdName()
    {
        return $this->ccIdName;
    }

    /**
     * @param string $ccIdNumber
     */
    public function setCcIdNumber($ccIdNumber)
    {
        $this->ccIdNumber = $ccIdNumber;
    }

    /**
     * @return string
     */
    public function getCcIdNumber()
    {
        return $this->ccIdNumber;
    }

    /**
     * @param string $ccInstallmentcount
     */
    public function setCcInstallmentcount($ccInstallmentcount)
    {
        $this->ccInstallmentcount = $ccInstallmentcount;
    }

    /**
     * @return string
     */
    public function getCcInstallmentcount()
    {
        return $this->ccInstallmentcount;
    }

    /**
     * @param string $ccNumber
     */
    public function setCcNumber($ccNumber)
    {
        $this->ccNumber = $ccNumber;
    }

    /**
     * @return string
     */
    public function getCcNumber()
    {
        return $this->ccNumber;
    }

    /**
     * @param string $ccSecurity
     */
    public function setCcSecurity($ccSecurity)
    {
        $this->ccSecurity = $ccSecurity;
    }

    /**
     * @return string
     */
    public function getCcSecurity()
    {
        return $this->ccSecurity;
    }

    /**
     * @param string $celphone
     */
    public function setCelphone($celphone)
    {
        $this->celphone = $celphone;
    }

    /**
     * @return string
     */
    public function getCelphone()
    {
        return $this->celphone;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $complement
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;
    }

    /**
     * @return string
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $neighborhood
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;
    }

    /**
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

}
