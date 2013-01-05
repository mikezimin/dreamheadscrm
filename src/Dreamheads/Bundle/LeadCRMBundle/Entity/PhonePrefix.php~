<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhonePrefix
 *
 * @ORM\Table(name="phone_prefixes")
 * @ORM\Entity(repositoryClass="Dreamheads\Bundle\LeadCRMBundle\Entity\PhonePrefixRepository")
 */
class PhonePrefix
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
     * @ORM\ManyToOne(targetEntity="Region")
	 * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    private $region;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Operator")
	 * @ORM\JoinColumn(name="operator_id", referencedColumnName="id")
     */
    private $operator;
	
    /**
     * @var string
     *
     * @ORM\Column(name="mask", type="string", length=20)
     */
    private $mask;


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
     * Set region
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Region $region
     * @return PhonePrefix
     */
    public function setRegion(\Dreamheads\Bundle\LeadCRMBundle\Entity\Region $region = null)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return \Dreamheads\Bundle\LeadCRMBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set mask
     *
     * @param string $mask
     * @return PhonePrefix
     */
    public function setMask($mask)
    {
        $this->mask = $mask;
    
        return $this;
    }

    /**
     * Get mask
     *
     * @return string 
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Set operator
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Operator $operator
     * @return PhonePrefix
     */
    public function setOperator(\Dreamheads\Bundle\LeadCRMBundle\Entity\Operator $operator = null)
    {
        $this->operator = $operator;
    
        return $this;
    }

    /**
     * Get operator
     *
     * @return \Dreamheads\Bundle\LeadCRMBundle\Entity\Operator 
     */
    public function getOperator()
    {
        return $this->operator;
    }
}