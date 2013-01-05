<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User implements UserInterface
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

	/**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
	
    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

	
	/**
	 * @var ArrayCollection
	 *
	 * @ORM\OneToMany(targetEntity="Form", mappedBy="user")
	 */
	private $forms;

	public function __construct()
	{
		$this->forms = new ArrayCollection();
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
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
		return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
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
     * Add forms
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Form $forms
     * @return User
     */
    public function addForm(\Dreamheads\Bundle\LeadCRMBundle\Entity\Form $forms)
    {
        $this->forms[] = $forms;
    
        return $this;
    }

    /**
     * Remove forms
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Form $forms
     */
    public function removeForm(\Dreamheads\Bundle\LeadCRMBundle\Entity\Form $forms)
    {
        $this->forms->removeElement($forms);
    }

    /**
     * Get forms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getForms()
    {
        return $this->forms;
    }
	
	// UserInterface functions
	
	public function getRoles() {
		return array('ROLE_USER');
	}
	
	public function getSalt() {
		return '';
	}
	
	public function getUsername() {
		return $this->email;
	}
	
	public function eraseCredentials() {
		
	}
	
	public function getPassword() {
		return $this->password;
	}
	

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = hash('md5', $password . $this->getSalt());
    
        return $this;
    }
}