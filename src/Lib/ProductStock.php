<?php

namespace BPolNet\A\VendorApi\Lib;

class ProductStock
{

    /**
     * @var string $ExternalItemId
     */
    protected $ExternalItemId = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param string $ExternalItemId
     * @param float $Amount
     */
    public function __construct($ExternalItemId, $Amount)
    {
      $this->ExternalItemId = $ExternalItemId;
      $this->Amount = $Amount;
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
     * @return \BPolNet\A\VendorApi\Lib\ProductStock
     */
    public function setExternalItemId($ExternalItemId)
    {
      $this->ExternalItemId = $ExternalItemId;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \BPolNet\A\VendorApi\Lib\ProductStock
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
