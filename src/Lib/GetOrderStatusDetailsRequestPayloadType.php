<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusDetailsRequestPayloadType
{

    /**
     * @var GetOrderStatusDetailsRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param GetOrderStatusDetailsRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return GetOrderStatusDetailsRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetOrderStatusDetailsRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusDetailsRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
