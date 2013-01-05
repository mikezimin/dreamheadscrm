<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Field
 *
 * @ORM\Table(name="fields")
 * @ORM\Entity
 */
class Field
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Form", inversedBy="fields")
	 * @ORM\JoinColumn(name="form_id", referencedColumnName="id")
     */
    private $form;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="html_name", type="string", length=255)
     */
    private $html_name;

	/**
     * @var string
     *
     * @ORM\Column(name="sms_name", type="string", length=255)
     */
	private $smsName;
	
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_phone", type="boolean")
     */
    private $is_phone = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_email", type="boolean")
     */
    private $is_email = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_name", type="boolean")
     */
    private $is_name = false;

	/**
     * @var boolean
     *
     * @ORM\Column(name="is_required", type="boolean")
     */
    private $is_required = false;

	
	/**
	 * @var ArrayCollection
	 *
	 * @ORM\OneToMany(targetEntity="Couple", mappedBy="field")
	 */
	private $couples;
	
	public function __construct()
	{
		$this->couples = new ArrayCollection();
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
     * @return Field
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
     * Set html_name
     *
     * @param string $htmlName
     * @return Field
     */
    public function setHtmlName($htmlName)
    {
        $this->html_name = $htmlName;
    
        return $this;
    }

    /**
     * Get html_name
     *
     * @return string 
     */
    public function getHtmlName()
    {
        return $this->html_name;
    }

    /**
     * Set is_phone
     *
     * @param boolean $isPhone
     * @return Field
     */
    public function setIsPhone($isPhone)
    {
        $this->is_phone = $isPhone;
    
        return $this;
    }

    /**
     * Get is_phone
     *
     * @return boolean 
     */
    public function getIsPhone()
    {
        return $this->is_phone;
    }

    /**
     * Set is_email
     *
     * @param boolean $isEmail
     * @return Field
     */
    public function setIsEmail($isEmail)
    {
        $this->is_email = $isEmail;
    
        return $this;
    }

    /**
     * Get is_email
     *
     * @return boolean 
     */
    public function getIsEmail()
    {
        return $this->is_email;
    }

    /**
     * Set is_name
     *
     * @param boolean $isName
     * @return Field
     */
    public function setIsName($isName)
    {
        $this->is_name = $isName;
    
        return $this;
    }

    /**
     * Get is_name
     *
     * @return boolean 
     */
    public function getIsName()
    {
        return $this->is_name;
    }

    /**
     * Add couples
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Couple $couples
     * @return Field
     */
    public function addCouple(\Dreamheads\Bundle\LeadCRMBundle\Entity\Couple $couples)
    {
        $this->couples[] = $couples;
    
        return $this;
    }

    /**
     * Remove couples
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Couple $couples
     */
    public function removeCouple(\Dreamheads\Bundle\LeadCRMBundle\Entity\Couple $couples)
    {
        $this->couples->removeElement($couples);
    }

    /**
     * Get couples
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCouples()
    {
        return $this->couples;
    }

    /**
     * Set form
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Form $form
     * @return Field
     */
    public function setForm(\Dreamheads\Bundle\LeadCRMBundle\Entity\Form $form = null)
    {
        $this->form = $form;
    
        return $this;
    }

    /**
     * Get form
     *
     * @return \Dreamheads\Bundle\LeadCRMBundle\Entity\Form 
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set smsName
     *
     * @param string $smsName
     * @return Field
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
     * Set is_required
     *
     * @param boolean $isRequired
     * @return Field
     */
    public function setIsRequired($isRequired)
    {
        $this->is_required = $isRequired;
    
        return $this;
    }

    /**
     * Get is_required
     *
     * @return boolean 
     */
    public function getIsRequired()
    {
        return $this->is_required;
    }
}