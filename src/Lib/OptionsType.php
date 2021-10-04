<?php

namespace BPolNet\A\VendorApi\Lib;

class OptionsType
{

    /**
     * @var boolean $VariantsByColorPatternAllowed
     */
    protected $VariantsByColorPatternAllowed = null;

    /**
     * @var boolean $Advertisement
     */
    protected $Advertisement = null;

    /**
     * @var boolean $AdvertisementPriceOptional
     */
    protected $AdvertisementPriceOptional = null;

    /**
     * @var boolean $OffersWithProductPublicationEnabled
     */
    protected $OffersWithProductPublicationEnabled = null;

    /**
     * @var boolean $ProductCreationEnabled
     */
    protected $ProductCreationEnabled = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getVariantsByColorPatternAllowed()
    {
      return $this->VariantsByColorPatternAllowed;
    }

    /**
     * @param boolean $VariantsByColorPatternAllowed
     * @return \BPolNet\A\VendorApi\Lib\OptionsType
     */
    public function setVariantsByColorPatternAllowed($VariantsByColorPatternAllowed)
    {
      $this->VariantsByColorPatternAllowed = $VariantsByColorPatternAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvertisement()
    {
      return $this->Advertisement;
    }

    /**
     * @param boolean $Advertisement
     * @return \BPolNet\A\VendorApi\Lib\OptionsType
     */
    public function setAdvertisement($Advertisement)
    {
      $this->Advertisement = $Advertisement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvertisementPriceOptional()
    {
      return $this->AdvertisementPriceOptional;
    }

    /**
     * @param boolean $AdvertisementPriceOptional
     * @return \BPolNet\A\VendorApi\Lib\OptionsType
     */
    public function setAdvertisementPriceOptional($AdvertisementPriceOptional)
    {
      $this->AdvertisementPriceOptional = $AdvertisementPriceOptional;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOffersWithProductPublicationEnabled()
    {
      return $this->OffersWithProductPublicationEnabled;
    }

    /**
     * @param boolean $OffersWithProductPublicationEnabled
     * @return \BPolNet\A\VendorApi\Lib\OptionsType
     */
    public function setOffersWithProductPublicationEnabled($OffersWithProductPublicationEnabled)
    {
      $this->OffersWithProductPublicationEnabled = $OffersWithProductPublicationEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProductCreationEnabled()
    {
      return $this->ProductCreationEnabled;
    }

    /**
     * @param boolean $ProductCreationEnabled
     * @return \BPolNet\A\VendorApi\Lib\OptionsType
     */
    public function setProductCreationEnabled($ProductCreationEnabled)
    {
      $this->ProductCreationEnabled = $ProductCreationEnabled;
      return $this;
    }

}
