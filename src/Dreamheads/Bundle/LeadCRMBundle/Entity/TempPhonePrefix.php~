<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempPhonePrefix
 *
 * @ORM\Table(name="temp_phone_prefixes")
 * @ORM\Entity
 */
class TempPhonePrefix
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
     * @ORM\Column(name="mask", type="string", length=255)
     */
    private $mask;

    /**
     * @var string
     *
     * @ORM\Column(name="operator", type="string", length=255)
     */
    private $operator;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

	
	/**
	 * @ORM\ManyToOne(targetEntity="Region")
	 * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
	 */
	private $reg;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Operator")
	 * @ORM\JoinColumn(name="operator_id", referencedColumnName="id")
	 */
	private $oper;

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
     * Set mask
     *
     * @param string $mask
     * @return TempPhonePrefix
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
     * @param string $operator
     * @return TempPhonePrefix
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    
        return $this;
    }

    /**
     * Get operator
     *
     * @return string 
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return TempPhonePrefix
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set reg
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Region $reg
     * @return TempPhonePrefix
     */
    public function setReg(\Dreamheads\Bundle\LeadCRMBundle\Entity\Region $reg = null)
    {
        $this->reg = $reg;
    
        return $this;
    }

    /**
     * Get reg
     *
     * @return \Dreamheads\Bundle\LeadCRMBundle\Entity\Region 
     */
    public function getReg()
    {
        return $this->reg;
    }

    /**
     * Set oper
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Operator $oper
     * @return TempPhonePrefix
     */
    public function setOper(\Dreamheads\Bundle\LeadCRMBundle\Entity\Operator $oper = null)
    {
        $this->oper = $oper;
    
        return $this;
    }

    /**
     * Get oper
     *
     * @return \Dreamheads\Bundle\LeadCRMBundle\Entity\Operator 
     */
    public function getOper()
    {
        return $this->oper;
    }

}