<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPurchaseOrderRequestMessageType
{

    /**
     * @var GetPurchaseOrderRequestPayloadType $GetPurchaseOrderRequestPayload
     */
    protected $GetPurchaseOrderRequestPayload = null;

    /**
     * @param GetPurchaseOrderRequestPayloadType $GetPurchaseOrderRequestPayload
     */
    public function __construct($GetPurchaseOrderRequestPayload)
    {
      $this->GetPurchaseOrderRequestPayload = $GetPurchaseOrderRequestPayload;
    }

    /**
     * @return GetPurchaseOrderRequestPayloadType
     */
    public function getGetPurchaseOrderRequestPayload()
    {
      return $this->GetPurchaseOrderRequestPayload;
    }

    /**
     * @param GetPurchaseOrderRequestPayloadType $GetPurchaseOrderRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\GetPurchaseOrderRequestMessageType
     */
    public function setGetPurchaseOrderRequestPayload($GetPurchaseOrderRequestPayload)
    {
      $this->GetPurchaseOrderRequestPayload = $GetPurchaseOrderRequestPayload;
      return $this;
    }

}
