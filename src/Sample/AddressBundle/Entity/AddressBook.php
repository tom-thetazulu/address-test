<?php

namespace Sample\AddressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressBook
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sample\AddressBundle\Entity\AddressBookRepository")
 */
class AddressBook
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
     * @ORM\Column(name="first_name", type="string", length=50)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="address_1", type="string", length=255)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address_2", type="string", length=255)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=7)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_home", type="string", length=11)
     */
    private $telephoneHome;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_mobile", type="string", length=11)
     */
    private $telephoneMobile;


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
     * Set firstName
     *
     * @param string $firstName
     * @return AddressBook
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return AddressBook
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return AddressBook
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    
        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return AddressBook
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    
        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return AddressBook
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
     * Set postcode
     *
     * @param string $postcode
     * @return AddressBook
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    
        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set telephoneHome
     *
     * @param string $telephoneHome
     * @return AddressBook
     */
    public function setTelephoneHome($telephoneHome)
    {
        $this->telephoneHome = $telephoneHome;
    
        return $this;
    }

    /**
     * Get telephoneHome
     *
     * @return string 
     */
    public function getTelephoneHome()
    {
        return $this->telephoneHome;
    }

    /**
     * Set telephoneMobile
     *
     * @param string $telephoneMobile
     * @return AddressBook
     */
    public function setTelephoneMobile($telephoneMobile)
    {
        $this->telephoneMobile = $telephoneMobile;
    
        return $this;
    }

    /**
     * Get telephoneMobile
     *
     * @return string 
     */
    public function getTelephoneMobile()
    {
        return $this->telephoneMobile;
    }
}
