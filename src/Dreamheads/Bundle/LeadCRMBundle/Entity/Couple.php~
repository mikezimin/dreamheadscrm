<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Couple
 *
 * @ORM\Table(name="couples")
 * @ORM\Entity
 */
class Couple
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
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Lead", inversedBy="couples")
	 * @ORM\JoinColumn(name="lead_id", referencedColumnName="id")
     */
    private $lead;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Field", inversedBy="couples")
	 * @ORM\JoinColumn(name="field_id", referencedColumnName="id")
     */
    private $field;


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
     * Set value
     *
     * @param string $value
     * @return Couple
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * Set lead
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Lead $lead
     * @return Couple
     */
    public function setLead(\Dreamheads\Bundle\LeadCRMBundle\Entity\Lead $lead = null)
    {
        $this->lead = $lead;
    
        return $this;
    }

    /**
     * Get lead
     *
     * @return \Dreamheads\Bundle\LeadCRMBundle\Entity\Lead 
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * Set field
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Field $field
     * @return Couple
     */
    public function setField(\Dreamheads\Bundle\LeadCRMBundle\Entity\Field $field = null)
    {
        $this->field = $field;
    
        return $this;
    }

    /**
     * Get field
     *
     * @return \Dreamheads\Bundle\LeadCRMBundle\Entity\Field 
     */
    public function getField()
    {
        return $this->field;
    }
}