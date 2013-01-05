<?php

namespace Dreamheads\Bundle\LeadCRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Lead
 *
 * @ORM\Table(name="leads")
 * @ORM\Entity(repositoryClass="Dreamheads\Bundle\LeadCRMBundle\Entity\LeadRepository")
 */
class Lead
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
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime")
     */
    private $time;

    /**
     * @var \Form
     *
     * @ORM\ManyToOne(targetEntity="Form", inversedBy="leads")
	 * @ORM\JoinColumn(name="form_id", referencedColumnName="id")
     */
    private $form;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_bad", type="boolean")
     */
    private $is_bad = false;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;
	
	/**
	 * @var ArrayCollection
	 *
	 * @ORM\OneToMany(targetEntity="Couple", mappedBy="lead")
	 */
	private $couples;

	/**
	 * @var integer
	 *
	 * @ORM\ManyToOne(targetEntity="Region", inversedBy="leads")
	 * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
	 */
	private $region;
	
	public function __construct()
	{
		// set default time
		$this->time = new \DateTime("now");
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
     * Set time
     *
     * @param \DateTime $time
     * @return Lead
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set is_bad
     *
     * @param string $isBad
     * @return Lead
     */
    public function setIsBad($isBad)
    {
        $this->is_bad = $isBad;
    
        return $this;
    }

    /**
     * Get is_bad
     *
     * @return string 
     */
    public function getIsBad()
    {
        return $this->is_bad;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Lead
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set form
     *
     * @param \Form $form
     * @return Lead
     */
    public function setForm($form)
    {
        $this->form = $form;
    
        return $this;
    }

    /**
     * Get form
     *
     * @return \Form 
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Add couples
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Couple $couples
     * @return Lead
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
     * Set region
     *
     * @param \Dreamheads\Bundle\LeadCRMBundle\Entity\Region $region
     * @return Lead
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
	
}