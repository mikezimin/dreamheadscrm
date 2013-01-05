<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Region
 *
 * @ORM\Table(name="regions")
 * @ORM\Entity
 */
class Region
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
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="PhonePrefix", mappedBy="region")
     */
    private $phonePrefixes;
	
	/**
	 * @var ArrayCollection
	 *
	 * @ORM\OneToMany(targetEntity="Lead", mappedBy="region")
	 */
	private $leads;

	public function __construct()
	{
		$this->leads = new ArrayCollection();
		$this->phonePrefixes = new ArrayCollection();
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
     * @return Region
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
     * Add leads
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Lead $leads
     * @return Region
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
     * Add phonePrefixes
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\PhonePrefix $phonePrefixes
     * @return Region
     */
    public function addPhonePrefixe(\Dreamheads\Bundle\LeadCRMBundle\Entity\PhonePrefix $phonePrefixes)
    {
        $this->phonePrefixes[] = $phonePrefixes;
    
        return $this;
    }

    /**
     * Remove phonePrefixes
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\PhonePrefix $phonePrefixes
     */
    public function removePhonePrefixe(\Dreamheads\Bundle\LeadCRMBundle\Entity\PhonePrefix $phonePrefixes)
    {
        $this->phonePrefixes->removeElement($phonePrefixes);
    }

    /**
     * Get phonePrefixes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhonePrefixes()
    {
        return $this->phonePrefixes;
    }
}