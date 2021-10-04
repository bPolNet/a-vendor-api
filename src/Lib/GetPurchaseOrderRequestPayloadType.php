<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPurchaseOrderRequestPayloadType
{

    /**
     * @var GetPurchaseOrderRequestBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPurchaseOrderRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetPurchaseOrderRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetPurchaseOrderRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
