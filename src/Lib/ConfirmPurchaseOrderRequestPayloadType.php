<?php

namespace BPolNet\A\VendorApi\Lib;

class ConfirmPurchaseOrderRequestPayloadType
{

    /**
     * @var ConfirmPurchaseOrderRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param ConfirmPurchaseOrderRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return ConfirmPurchaseOrderRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param ConfirmPurchaseOrderRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\ConfirmPurchaseOrderRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
