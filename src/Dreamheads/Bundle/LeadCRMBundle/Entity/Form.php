<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Form
 *
 * @ORM\Table(name="forms")
 * @ORM\Entity(repositoryClass="Dreamheads\Bundle\LeadCRMBundle\Entity\FormRepository")
 */
class Form
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
     * @var string
     *
     * @ORM\Column(name="sms_name", type="string", length=255)
     */
    private $smsName;
	
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="forms")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_cost", type="integer")
     */
    private $request_cost;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

	/**
     * @var string
     *
     * @ORM\Column(name="success_text", type="string", length=255)
     */
    private $successText;
	
	/**
     * @var string
     *
     * @ORM\Column(name="fail_text", type="string", length=255)
     */
    private $failText;
	
    /**
     * @var boolean
     *
     * @ORM\Column(name="post_mails", type="boolean")
     */
    private $post_mails;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20)
     */
    private $phone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="post_sms", type="boolean")
     */
    private $post_sms;
	
	/**
	 * @var 
	 *
	 * @ORM\OneToMany(targetEntity="Lead", mappedBy="form")
	 */
	private $leads;

	/**
	 * @var 
	 *
	 * @ORM\OneToMany(targetEntity="Field", mappedBy="form")
	 */
	private $fields;
	
	public function __construct()
	{	
		$this->leads = new ArrayCollection();
		$this->fields = new ArrayCollection();		
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
     * @return Form
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
     * Set user
     *
     * @param \User $user
     * @return Form
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set request_cost
     *
     * @param integer $requestCost
     * @return Form
     */
    public function setRequestCost($requestCost)
    {
        $this->request_cost = $requestCost;
    
        return $this;
    }

    /**
     * Get request_cost
     *
     * @return integer 
     */
    public function getRequestCost()
    {
        return $this->request_cost;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Form
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
     * Set post_mails
     *
     * @param boolean $postMails
     * @return Form
     */
    public function setPostMails($postMails)
    {
        $this->post_mails = $postMails;
    
        return $this;
    }

    /**
     * Get post_mails
     *
     * @return boolean 
     */
    public function getPostMails()
    {
        return $this->post_mails;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Form
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
     * Set post_sms
     *
     * @param boolean $postSms
     * @return Form
     */
    public function setPostSms($postSms)
    {
        $this->post_sms = $postSms;
    
        return $this;
    }

    /**
     * Get post_sms
     *
     * @return boolean 
     */
    public function getPostSms()
    {
        return $this->post_sms;
    }

    /**
     * Add leads
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Lead $leads
     * @return Form
     */
    public function addLead(\Dreamheads\Bundle\LeadCRMBundle\Entity\Lead $leads)
    {
        $this->leads[] = $leads;
    
        return $this;
    }

    /**
     * Remove leads
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Lead $leads
     */
    public function removeLead(\Dreamheads\Bundle\LeadCRMBundle\Entity\Lead $leads)
    {
        $this->leads->removeElement($leads);
    }

    /**
     * Get leads
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLeads()
    {
        return $this->leads;
    }

    /**
     * Add fields
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Field $fields
     * @return Form
     */
    public function addField(\Dreamheads\Bundle\LeadCRMBundle\Entity\Field $fields)
    {
        $this->fields[] = $fields;
    
        return $this;
    }

    /**
     * Remove fields
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Field $fields
     */
    public function removeField(\Dreamheads\Bundle\LeadCRMBundle\Entity\Field $fields)
    {
        $this->fields->removeElement($fields);
    }

    /**
     * Get fields
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set smsName
     *
     * @param string $smsName
     * @return Form
     */
    public function setSmsName($smsName)
    {
        $this->smsName = $smsName;
    
        return $this;
    }

    /**
     * Get smsName
     *
     * @return string 
     */
    public function getSmsName()
    {
        return $this->smsName;
    }

    /**
     * Set successText
     *
     * @param string $successText
     * @return Form
     */
    public function setSuccessText($successText)
    {
        $this->successText = $successText;
    
        return $this;
    }

    /**
     * Get successText
     *
     * @return string 
     */
    public function getSuccessText()
    {
        return $this->successText;
    }

    /**
     * Set failText
     *
     * @param string $failText
     * @return Form
     */
    public function setFailText($failText)
    {
        $this->failText = $failText;
    
        return $this;
    }

    /**
     * Get failText
     *
     * @return string 
     */
    public function getFailText()
    {
        return $this->failText;
    }
}