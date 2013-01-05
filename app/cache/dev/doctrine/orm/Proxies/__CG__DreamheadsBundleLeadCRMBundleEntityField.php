<?php

namespace Proxies\__CG__\Dreamheads\Bundle\LeadCRMBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Field extends \Dreamheads\Bundle\LeadCRMBundle\Entity\Field implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setHtmlName($htmlName)
    {
        $this->__load();
        return parent::setHtmlName($htmlName);
    }

    public function getHtmlName()
    {
        $this->__load();
        return parent::getHtmlName();
    }

    public function setIsPhone($isPhone)
    {
        $this->__load();
        return parent::setIsPhone($isPhone);
    }

    public function getIsPhone()
    {
        $this->__load();
        return parent::getIsPhone();
    }

    public function setIsEmail($isEmail)
    {
        $this->__load();
        return parent::setIsEmail($isEmail);
    }

    public function getIsEmail()
    {
        $this->__load();
        return parent::getIsEmail();
    }

    public function setIsName($isName)
    {
        $this->__load();
        return parent::setIsName($isName);
    }

    public function getIsName()
    {
        $this->__load();
        return parent::getIsName();
    }

    public function addCouple(\Dreamheads\Bundle\LeadCRMBundle\Entity\Couple $couples)
    {
        $this->__load();
        return parent::addCouple($couples);
    }

    public function removeCouple(\Dreamheads\Bundle\LeadCRMBundle\Entity\Couple $couples)
    {
        $this->__load();
        return parent::removeCouple($couples);
    }

    public function getCouples()
    {
        $this->__load();
        return parent::getCouples();
    }

    public function setForm(\Dreamheads\Bundle\LeadCRMBundle\Entity\Form $form = NULL)
    {
        $this->__load();
        return parent::setForm($form);
    }

    public function getForm()
    {
        $this->__load();
        return parent::getForm();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'html_name', 'is_phone', 'is_email', 'is_name', 'form', 'couples');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}