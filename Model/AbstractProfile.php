<?php

namespace LapaLabs\UserProfileBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class AbstractAbstractProfile
 */
abstract class AbstractProfile
{
    /**
     * The male sex value
     */
    const MALE = true;

    /**
     * The female sex value
     */
    const FEMALE = false;

    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $surname;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $patronymic;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    protected $sex;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $skype;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $website;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $country;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $district;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $address;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * @var UserInterface
     *
     * @ORM\OneToOne(targetEntity="Symfony\Component\Security\Core\User\UserInterface")
     */
    protected $user;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function __toString()
    {
        return $this->getFullName();
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

    public function getFullName()
    {
        $fullName = [];
        if ($this->surname) {
            $fullName[] = $this->surname;
        }
        if ($this->name) {
            $fullName[] = $this->name;
        }
        if ($this->patronymic) {
            $fullName[] = $this->patronymic;
        }

        return implode(' ', $fullName);
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return AbstractProfile
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return AbstractProfile
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
     * Set patronymic
     *
     * @param string $patronymic
     * @return AbstractProfile
     */
    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;

        return $this;
    }

    /**
     * Get patronymic
     *
     * @return string 
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }

    /**
     * Set sex
     *
     * @param boolean $sex
     * @return AbstractProfile
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return boolean
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return AbstractProfile
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return AbstractProfile
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set skype
     *
     * @param string $skype
     * @return AbstractProfile
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return AbstractProfile
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return AbstractProfile
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set district
     *
     * @param string $district
     * @return AbstractProfile
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return AbstractProfile
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return AbstractProfile
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \DateTime $createdAt
     * @return AbstractProfile
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return AbstractProfile
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param UserInterface $user
     * @return AbstractProfile
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }
}
