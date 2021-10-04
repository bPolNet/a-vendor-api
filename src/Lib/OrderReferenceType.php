<?php

namespace BPolNet\A\VendorApi\Lib;

class OrderReferenceType
{

    /**
     * @var string[] $PurchaseId
     */
    protected $PurchaseId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getPurchaseId()
    {
      return $this->PurchaseId;
    }

    /**
     * @param string[] $PurchaseId
     * @return \BPolNet\A\VendorApi\Lib\OrderReferenceType
     */
    public function setPurchaseId(array $PurchaseId = null)
    {
      $this->PurchaseId = $PurchaseId;
      return $this;
    }

}
