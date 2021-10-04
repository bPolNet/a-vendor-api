<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusRequestMessageType
{

    /**
     * @var GetOrderStatusRequestPayloadType $GetOrderStatusRequestPayload
     */
    protected $GetOrderStatusRequestPayload = null;

    /**
     * @param GetOrderStatusRequestPayloadType $GetOrderStatusRequestPayload
     */
    public function __construct($GetOrderStatusRequestPayload)
    {
      $this->GetOrderStatusRequestPayload = $GetOrderStatusRequestPayload;
    }

    /**
     * @return GetOrderStatusRequestPayloadType
     */
    public function getGetOrderStatusRequestPayload()
    {
      return $this->GetOrderStatusRequestPayload;
    }

    /**
     * @param GetOrderStatusRequestPayloadType $GetOrderStatusRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusRequestMessageType
     */
    public function setGetOrderStatusRequestPayload($GetOrderStatusRequestPayload)
    {
      $this->GetOrderStatusRequestPayload = $GetOrderStatusRequestPayload;
      return $this;
    }

}
