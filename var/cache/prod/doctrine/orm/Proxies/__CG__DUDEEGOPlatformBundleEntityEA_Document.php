<?php

namespace Proxies\__CG__\DUDEEGO\PlatformBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EA_Document extends \DUDEEGO\PlatformBundle\Entity\EA_Document implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'physique', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'id', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'PasseportFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'PasseportName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'CarteIdentiteFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'CarteIdentiteName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'BulletinNoteFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'BulletinNoteName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'BacFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'BacName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'CredentialFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'CredentialName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'LettreRecommendationFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'LettreRecommendationName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'LettreMotivationFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'LettreMotivationName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'physique', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'id', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'PasseportFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'PasseportName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'CarteIdentiteFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'CarteIdentiteName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'BulletinNoteFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'BulletinNoteName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'BacFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'BacName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'CredentialFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'CredentialName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'LettreRecommendationFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'LettreRecommendationName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'LettreMotivationFile', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'LettreMotivationName', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\EA_Document' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EA_Document $proxy) {
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
    public function setPhysique(\DUDEEGO\PlatformBundle\Entity\EA_Physique $physique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhysique', [$physique]);

        return parent::setPhysique($physique);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhysique()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhysique', []);

        return parent::getPhysique();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasseportFile(\Symfony\Component\HttpFoundation\File\File $pdf = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasseportFile', [$pdf]);

        return parent::setPasseportFile($pdf);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasseportFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasseportFile', []);

        return parent::getPasseportFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setCarteIdentiteFile(\Symfony\Component\HttpFoundation\File\File $pdf = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarteIdentiteFile', [$pdf]);

        return parent::setCarteIdentiteFile($pdf);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarteIdentiteFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarteIdentiteFile', []);

        return parent::getCarteIdentiteFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setBulletinNoteFile(\Symfony\Component\HttpFoundation\File\File $pdf = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBulletinNoteFile', [$pdf]);

        return parent::setBulletinNoteFile($pdf);
    }

    /**
     * {@inheritDoc}
     */
    public function getBulletinNoteFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBulletinNoteFile', []);

        return parent::getBulletinNoteFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setBacFile(\Symfony\Component\HttpFoundation\File\File $pdf = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBacFile', [$pdf]);

        return parent::setBacFile($pdf);
    }

    /**
     * {@inheritDoc}
     */
    public function getBacFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBacFile', []);

        return parent::getBacFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialFile(\Symfony\Component\HttpFoundation\File\File $pdf = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialFile', [$pdf]);

        return parent::setCredentialFile($pdf);
    }

    /**
     * {@inheritDoc}
     */
    public function getCredentialFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCredentialFile', []);

        return parent::getCredentialFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setLettreRecommendationFile(\Symfony\Component\HttpFoundation\File\File $pdf = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLettreRecommendationFile', [$pdf]);

        return parent::setLettreRecommendationFile($pdf);
    }

    /**
     * {@inheritDoc}
     */
    public function getLettreRecommendationFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLettreRecommendationFile', []);

        return parent::getLettreRecommendationFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setLettreMotivationFile(\Symfony\Component\HttpFoundation\File\File $pdf = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLettreMotivationFile', [$pdf]);

        return parent::setLettreMotivationFile($pdf);
    }

    /**
     * {@inheritDoc}
     */
    public function getLettreMotivationFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLettreMotivationFile', []);

        return parent::getLettreMotivationFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasseportName($passeportName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasseportName', [$passeportName]);

        return parent::setPasseportName($passeportName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasseportName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasseportName', []);

        return parent::getPasseportName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCarteIdentiteName($carteIdentiteName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarteIdentiteName', [$carteIdentiteName]);

        return parent::setCarteIdentiteName($carteIdentiteName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarteIdentiteName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarteIdentiteName', []);

        return parent::getCarteIdentiteName();
    }

    /**
     * {@inheritDoc}
     */
    public function setBulletinNoteName($bulletinNoteName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBulletinNoteName', [$bulletinNoteName]);

        return parent::setBulletinNoteName($bulletinNoteName);
    }

    /**
     * {@inheritDoc}
     */
    public function getBulletinNoteName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBulletinNoteName', []);

        return parent::getBulletinNoteName();
    }

    /**
     * {@inheritDoc}
     */
    public function setBacName($bacName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBacName', [$bacName]);

        return parent::setBacName($bacName);
    }

    /**
     * {@inheritDoc}
     */
    public function getBacName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBacName', []);

        return parent::getBacName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialName($credentialName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialName', [$credentialName]);

        return parent::setCredentialName($credentialName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCredentialName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCredentialName', []);

        return parent::getCredentialName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLettreRecommendationName($lettreRecommendationName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLettreRecommendationName', [$lettreRecommendationName]);

        return parent::setLettreRecommendationName($lettreRecommendationName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLettreRecommendationName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLettreRecommendationName', []);

        return parent::getLettreRecommendationName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLettreMotivationName($lettreMotivationName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLettreMotivationName', [$lettreMotivationName]);

        return parent::setLettreMotivationName($lettreMotivationName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLettreMotivationName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLettreMotivationName', []);

        return parent::getLettreMotivationName();
    }

}
