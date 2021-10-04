<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPurchaseOrderResponseBodyType
{

    /**
     * @var PurchaseOrderType[] $PurchaseOrder
     */
    protected $PurchaseOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseOrderType[]
     */
    public function getPurchaseOrder()
    {
      return $this->PurchaseOrder;
    }

    /**
     * @param PurchaseOrderType[] $PurchaseOrder
     * @return \BPolNet\A\VendorApi\Lib\GetPurchaseOrderResponseBodyType
     */
    public function setPurchaseOrder(array $PurchaseOrder = null)
    {
      $this->PurchaseOrder = $PurchaseOrder;
      return $this;
    }

}
