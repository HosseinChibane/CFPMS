<?php

namespace Proxies\__CG__\DUDEEGO\PlatformBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EA_Physique extends \DUDEEGO\PlatformBundle\Entity\EA_Physique implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'personne', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'image', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'documents', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'demandes', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'id', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'nom', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'prenom', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'datenaissance', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'numerocarteid'];
        }

        return ['__isInitialized__', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'personne', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'image', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'documents', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'demandes', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'id', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'nom', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'prenom', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'datenaissance', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Physique' . "\0" . 'numerocarteid'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EA_Physique $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatenaissance($datenaissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatenaissance', [$datenaissance]);

        return parent::setDatenaissance($datenaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatenaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatenaissance', []);

        return parent::getDatenaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumerocarteid($numerocarteid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumerocarteid', [$numerocarteid]);

        return parent::setNumerocarteid($numerocarteid);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumerocarteid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumerocarteid', []);

        return parent::getNumerocarteid();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocument(\DUDEEGO\PlatformBundle\Entity\EA_Document $document)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocument', [$document]);

        return parent::setDocument($document);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocument()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocument', []);

        return parent::getDocument();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompteutilisateur(\DUDEEGO\PlatformBundle\Entity\User $compteutilisateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompteutilisateur', [$compteutilisateur]);

        return parent::setCompteutilisateur($compteutilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompteutilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompteutilisateur', []);

        return parent::getCompteutilisateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setDemandeinscription(\DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demandeinscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDemandeinscription', [$demandeinscription]);

        return parent::setDemandeinscription($demandeinscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getDemandeinscription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDemandeinscription', []);

        return parent::getDemandeinscription();
    }

    /**
     * {@inheritDoc}
     */
    public function addDocument(\DUDEEGO\PlatformBundle\Entity\EA_Document $document)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDocument', [$document]);

        return parent::addDocument($document);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDocument(\DUDEEGO\PlatformBundle\Entity\EA_Document $document)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDocument', [$document]);

        return parent::removeDocument($document);
    }

    /**
     * {@inheritDoc}
     */
    public function addCompteutilisateur(\DUDEEGO\PlatformBundle\Entity\User $compteutilisateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCompteutilisateur', [$compteutilisateur]);

        return parent::addCompteutilisateur($compteutilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCompteutilisateur(\DUDEEGO\PlatformBundle\Entity\User $compteutilisateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCompteutilisateur', [$compteutilisateur]);

        return parent::removeCompteutilisateur($compteutilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function addDemandeinscription(\DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demandeinscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDemandeinscription', [$demandeinscription]);

        return parent::addDemandeinscription($demandeinscription);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDemandeinscription(\DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demandeinscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDemandeinscription', [$demandeinscription]);

        return parent::removeDemandeinscription($demandeinscription);
    }

    /**
     * {@inheritDoc}
     */
    public function setPersonne(\DUDEEGO\PlatformBundle\Entity\EA_Personne $personne = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersonne', [$personne]);

        return parent::setPersonne($personne);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersonne()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersonne', []);

        return parent::getPersonne();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\DUDEEGO\PlatformBundle\Entity\EA_Image $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getDocuments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocuments', []);

        return parent::getDocuments();
    }

    /**
     * {@inheritDoc}
     */
    public function addDemande(\DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDemande', [$demande]);

        return parent::addDemande($demande);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDemande(\DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDemande', [$demande]);

        return parent::removeDemande($demande);
    }

    /**
     * {@inheritDoc}
     */
    public function getDemandes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDemandes', []);

        return parent::getDemandes();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocuments(\DUDEEGO\PlatformBundle\Entity\EA_Document $documents = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocuments', [$documents]);

        return parent::setDocuments($documents);
    }

}
