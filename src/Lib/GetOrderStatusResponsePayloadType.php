<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusResponsePayloadType
{

    /**
     * @var GetOrderStatusResponseBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetOrderStatusResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetOrderStatusResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
