<?php

namespace BPolNet\A\VendorApi\Lib;

class CancelPurchaseOrderResponsePayloadType
{

    /**
     * @var CancelPurchaseOrderResponseBodyType $Body
     */
    protected $Body = null;

    /**
     * @param CancelPurchaseOrderResponseBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return CancelPurchaseOrderResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param CancelPurchaseOrderResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\CancelPurchaseOrderResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
