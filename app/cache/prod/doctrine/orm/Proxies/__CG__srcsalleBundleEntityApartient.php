<?php

namespace Proxies\__CG__\src\salleBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Apartient extends \src\salleBundle\Entity\Apartient implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getIdApp()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idApp"];
        }
        $this->__load();
        return parent::getIdApp();
    }

    public function setIdAbonement(\src\salleBundle\Entity\Abonement $idAbonement = NULL)
    {
        $this->__load();
        return parent::setIdAbonement($idAbonement);
    }

    public function getIdAbonement()
    {
        $this->__load();
        return parent::getIdAbonement();
    }

    public function setIdSport(\src\salleBundle\Entity\Sport $idSport = NULL)
    {
        $this->__load();
        return parent::setIdSport($idSport);
    }

    public function getIdSport()
    {
        $this->__load();
        return parent::getIdSport();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idApp', 'idAbonement', 'idSport');
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