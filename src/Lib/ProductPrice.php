<?php

namespace BPolNet\A\VendorApi\Lib;

class ProductPrice
{

    /**
     * @var string $ExternalItemId
     */
    protected $ExternalItemId = null;

    /**
     * @var float $NetPrice
     */
    protected $NetPrice = null;

    /**
     * @var float $NetPrice
     */
    protected $Price = null;

    /**
     * @var float $OldPrice
     */
    protected $OldPrice = null;

    /**
     * @param string $ExternalItemId
     * @param float $NetPrice
     * @param float $OldPrice
     */
    public function __construct($ExternalItemId, $Price, $OldPrice = null)
    {
      $this->ExternalItemId = $ExternalItemId;
      $this->Price = $Price;
      $this->OldPrice = $OldPrice;
    }

    /**
     * @return string
     */
    public function getExternalItemId()
    {
      return $this->ExternalItemId;
    }

    /**
     * @param string $ExternalItemId
     * @return \BPolNet\A\VendorApi\Lib\ProductPrice
     */
    public function setExternalItemId($ExternalItemId)
    {
      $this->ExternalItemId = $ExternalItemId;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetPrice()
    {
      return $this->NetPrice;
    }

    /**
     * @param float $NetPrice
     * @return \BPolNet\A\VendorApi\Lib\ProductPrice
     */
    public function setNetPrice($NetPrice)
    {
      $this->NetPrice = $NetPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getOldPrice()
    {
      return $this->OldPrice;
    }

    /**
     * @param float $OldPrice
     * @return \BPolNet\A\VendorApi\Lib\ProductPrice
     */
    public function setOldPrice($OldPrice)
    {
      $this->OldPrice = $OldPrice;
      return $this;
    }

}
