<?php

namespace Proxies\__CG__\src\salleBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Abonement extends \src\salleBundle\Entity\Abonement implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getIdAbonement()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idAbonement"];
        }
        $this->__load();
        return parent::getIdAbonement();
    }

    public function setTotal($total)
    {
        $this->__load();
        return parent::setTotal($total);
    }

    public function getTotal()
    {
        $this->__load();
        return parent::getTotal();
    }

    public function setDateInscription($dateInscription)
    {
        $this->__load();
        return parent::setDateInscription($dateInscription);
    }

    public function getDateInscription()
    {
        $this->__load();
        return parent::getDateInscription();
    }

    public function setDuree($duree)
    {
        $this->__load();
        return parent::setDuree($duree);
    }

    public function getDuree()
    {
        $this->__load();
        return parent::getDuree();
    }

    public function setEtatabonement($etatabonement)
    {
        $this->__load();
        return parent::setEtatabonement($etatabonement);
    }

    public function getEtatabonement()
    {
        $this->__load();
        return parent::getEtatabonement();
    }

    public function setIdMembre(\src\salleBundle\Entity\Membre $idMembre = NULL)
    {
        $this->__load();
        return parent::setIdMembre($idMembre);
    }

    public function getIdMembre()
    {
        $this->__load();
        return parent::getIdMembre();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idAbonement', 'total', 'dateInscription', 'duree', 'etatabonement', 'idMembre');
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