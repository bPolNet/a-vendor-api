<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusRequestPayloadType
{

    /**
     * @var GetOrderStatusRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param GetOrderStatusRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return GetOrderStatusRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetOrderStatusRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
