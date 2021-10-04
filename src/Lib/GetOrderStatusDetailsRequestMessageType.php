<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusDetailsRequestMessageType
{

    /**
     * @var GetOrderStatusDetailsRequestPayloadType $GetOrderStatusDetailsRequestPayload
     */
    protected $GetOrderStatusDetailsRequestPayload = null;

    /**
     * @param GetOrderStatusDetailsRequestPayloadType $GetOrderStatusDetailsRequestPayload
     */
    public function __construct($GetOrderStatusDetailsRequestPayload)
    {
      $this->GetOrderStatusDetailsRequestPayload = $GetOrderStatusDetailsRequestPayload;
    }

    /**
     * @return GetOrderStatusDetailsRequestPayloadType
     */
    public function getGetOrderStatusDetailsRequestPayload()
    {
      return $this->GetOrderStatusDetailsRequestPayload;
    }

    /**
     * @param GetOrderStatusDetailsRequestPayloadType $GetOrderStatusDetailsRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusDetailsRequestMessageType
     */
    public function setGetOrderStatusDetailsRequestPayload($GetOrderStatusDetailsRequestPayload)
    {
      $this->GetOrderStatusDetailsRequestPayload = $GetOrderStatusDetailsRequestPayload;
      return $this;
    }

}
