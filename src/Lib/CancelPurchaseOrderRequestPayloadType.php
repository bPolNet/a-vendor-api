<?php

namespace BPolNet\A\VendorApi\Lib;

class CancelPurchaseOrderRequestPayloadType
{

    /**
     * @var CancelPurchaseOrderRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param CancelPurchaseOrderRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return CancelPurchaseOrderRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param CancelPurchaseOrderRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\CancelPurchaseOrderRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
