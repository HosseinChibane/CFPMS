<?php

namespace Proxies\__CG__\DUDEEGO\PlatformBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class T_Universite extends \DUDEEGO\PlatformBundle\Entity\T_Universite implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'documents', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'formations', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'images', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'adresse', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'id', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'nometablissement', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'siteinternet', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'description'];
        }

        return ['__isInitialized__', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'documents', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'formations', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'images', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'adresse', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'id', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'nometablissement', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'siteinternet', '' . "\0" . 'DUDEEGO\\PlatformBundle\\Entity\\T_Universite' . "\0" . 'description'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (T_Universite $proxy) {
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
    public function setNometablissement($nometablissement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNometablissement', [$nometablissement]);

        return parent::setNometablissement($nometablissement);
    }

    /**
     * {@inheritDoc}
     */
    public function getNometablissement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNometablissement', []);

        return parent::getNometablissement();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteinternet($siteinternet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteinternet', [$siteinternet]);

        return parent::setSiteinternet($siteinternet);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteinternet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteinternet', []);

        return parent::getSiteinternet();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\DUDEEGO\PlatformBundle\Entity\T_Image_Universite $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$image]);

        return parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\DUDEEGO\PlatformBundle\Entity\T_Image_Universite $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', [$image]);

        return parent::removeImage($image);
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
    public function addFormation(\DUDEEGO\PlatformBundle\Entity\T_Formation_Universite $formation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFormation', [$formation]);

        return parent::addFormation($formation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFormation(\DUDEEGO\PlatformBundle\Entity\T_Formation_Universite $formation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFormation', [$formation]);

        return parent::removeFormation($formation);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormations', []);

        return parent::getFormations();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(\DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\DUDEEGO\PlatformBundle\Entity\T_Image_Universite $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function addAdresse(\DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdresse', [$adresse]);

        return parent::addAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdresse(\DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdresse', [$adresse]);

        return parent::removeAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function addDocument(\DUDEEGO\PlatformBundle\Entity\T_Document_Universite $document)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDocument', [$document]);

        return parent::addDocument($document);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDocument(\DUDEEGO\PlatformBundle\Entity\T_Document_Universite $document)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDocument', [$document]);

        return parent::removeDocument($document);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocuments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocuments', []);

        return parent::getDocuments();
    }

}