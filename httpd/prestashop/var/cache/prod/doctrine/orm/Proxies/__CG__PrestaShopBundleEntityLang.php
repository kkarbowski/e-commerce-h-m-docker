<?php

namespace Proxies\__CG__\PrestaShopBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Lang extends \PrestaShopBundle\Entity\Lang implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'active', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'isoCode', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'languageCode', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'locale', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'dateFormatLite', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'dateFormatFull', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'isRtl', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'translations', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'shops');
        }

        return array('__isInitialized__', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'id', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'name', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'active', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'isoCode', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'languageCode', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'locale', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'dateFormatLite', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'dateFormatFull', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'isRtl', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'translations', '' . "\0" . 'PrestaShopBundle\\Entity\\Lang' . "\0" . 'shops');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Lang $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', array($active));

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', array());

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsoCode($isoCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsoCode', array($isoCode));

        return parent::setIsoCode($isoCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsoCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsoCode', array());

        return parent::getIsoCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguageCode($languageCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguageCode', array($languageCode));

        return parent::setLanguageCode($languageCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguageCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguageCode', array());

        return parent::getLanguageCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFormatLite($dateFormatLite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFormatLite', array($dateFormatLite));

        return parent::setDateFormatLite($dateFormatLite);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFormatLite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFormatLite', array());

        return parent::getDateFormatLite();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFormatFull($dateFormatFull)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFormatFull', array($dateFormatFull));

        return parent::setDateFormatFull($dateFormatFull);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFormatFull()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFormatFull', array());

        return parent::getDateFormatFull();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRtl($isRtl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRtl', array($isRtl));

        return parent::setIsRtl($isRtl);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRtl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRtl', array());

        return parent::getIsRtl();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocale', array());

        return parent::getLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocale', array($locale));

        return parent::setLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function addShop(\PrestaShopBundle\Entity\Shop $shop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addShop', array($shop));

        return parent::addShop($shop);
    }

    /**
     * {@inheritDoc}
     */
    public function removeShop(\PrestaShopBundle\Entity\Shop $shop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeShop', array($shop));

        return parent::removeShop($shop);
    }

    /**
     * {@inheritDoc}
     */
    public function getShops()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShops', array());

        return parent::getShops();
    }

}
