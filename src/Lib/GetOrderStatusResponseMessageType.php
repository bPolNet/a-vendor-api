<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var GetOrderStatusResponsePayloadType $GetOrderStatusResponsePayload
     */
    protected $GetOrderStatusResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param GetOrderStatusResponsePayloadType $GetOrderStatusResponsePayload
     */
    public function __construct($Header, $Result, $GetOrderStatusResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->GetOrderStatusResponsePayload = $GetOrderStatusResponsePayload;
    }

    /**
     * @return GetOrderStatusResponsePayloadType
     */
    public function getGetOrderStatusResponsePayload()
    {
      return $this->GetOrderStatusResponsePayload;
    }

    /**
     * @param GetOrderStatusResponsePayloadType $GetOrderStatusResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusResponseMessageType
     */
    public function setGetOrderStatusResponsePayload($GetOrderStatusResponsePayload)
    {
      $this->GetOrderStatusResponsePayload = $GetOrderStatusResponsePayload;
      return $this;
    }

}
