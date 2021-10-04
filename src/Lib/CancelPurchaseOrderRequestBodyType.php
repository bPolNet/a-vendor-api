<?php

namespace BPolNet\A\VendorApi\Lib;

class CancelPurchaseOrderRequestBodyType
{

    /**
     * @var string $PurchaseOrderId
     */
    protected $PurchaseOrderId = null;

    /**
     * @param string $PurchaseOrderId
     */
    public function __construct($PurchaseOrderId)
    {
      $this->PurchaseOrderId = $PurchaseOrderId;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderId()
    {
      return $this->PurchaseOrderId;
    }

    /**
     * @param string $PurchaseOrderId
     * @return \BPolNet\A\VendorApi\Lib\CancelPurchaseOrderRequestBodyType
     */
    public function setPurchaseOrderId($PurchaseOrderId)
    {
      $this->PurchaseOrderId = $PurchaseOrderId;
      return $this;
    }

}
