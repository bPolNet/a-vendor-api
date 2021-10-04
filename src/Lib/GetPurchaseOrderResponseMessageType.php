<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPurchaseOrderResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var GetPurchaseOrderResponsePayloadType $GetPurchaseOrderResponsePayload
     */
    protected $GetPurchaseOrderResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param GetPurchaseOrderResponsePayloadType $GetPurchaseOrderResponsePayload
     */
    public function __construct($Header, $Result, $GetPurchaseOrderResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->GetPurchaseOrderResponsePayload = $GetPurchaseOrderResponsePayload;
    }

    /**
     * @return GetPurchaseOrderResponsePayloadType
     */
    public function getGetPurchaseOrderResponsePayload()
    {
      return $this->GetPurchaseOrderResponsePayload;
    }

    /**
     * @param GetPurchaseOrderResponsePayloadType $GetPurchaseOrderResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\GetPurchaseOrderResponseMessageType
     */
    public function setGetPurchaseOrderResponsePayload($GetPurchaseOrderResponsePayload)
    {
      $this->GetPurchaseOrderResponsePayload = $GetPurchaseOrderResponsePayload;
      return $this;
    }

}
