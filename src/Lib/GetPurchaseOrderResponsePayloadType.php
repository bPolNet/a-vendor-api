<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPurchaseOrderResponsePayloadType
{

    /**
     * @var GetPurchaseOrderResponseBodyType[] $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPurchaseOrderResponseBodyType[]
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetPurchaseOrderResponseBodyType[] $Body
     * @return \BPolNet\A\VendorApi\Lib\GetPurchaseOrderResponsePayloadType
     */
    public function setBody(array $Body = null)
    {
      $this->Body = $Body;
      return $this;
    }

}
