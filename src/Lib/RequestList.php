<?php

namespace BPolNet\A\VendorApi\Lib;

class RequestList
{

    /**
     * @var string $PurchaseId
     */
    protected $PurchaseId = null;

    /**
     * @param string $PurchaseId
     */
    public function __construct($PurchaseId)
    {
      $this->PurchaseId = $PurchaseId;
    }

    /**
     * @return string
     */
    public function getPurchaseId()
    {
      return $this->PurchaseId;
    }

    /**
     * @param string $PurchaseId
     * @return \BPolNet\A\VendorApi\Lib\RequestList
     */
    public function setPurchaseId($PurchaseId)
    {
      $this->PurchaseId = $PurchaseId;
      return $this;
    }

}
