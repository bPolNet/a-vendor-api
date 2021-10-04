<?php

namespace BPolNet\A\VendorApi\Lib;

class CancelPurchaseOrderRequestMessageType
{

    /**
     * @var CancelPurchaseOrderRequestPayloadType $CancelPurchaseOrderRequestPayload
     */
    protected $CancelPurchaseOrderRequestPayload = null;

    /**
     * @param CancelPurchaseOrderRequestPayloadType $CancelPurchaseOrderRequestPayload
     */
    public function __construct($CancelPurchaseOrderRequestPayload)
    {
      $this->CancelPurchaseOrderRequestPayload = $CancelPurchaseOrderRequestPayload;
    }

    /**
     * @return CancelPurchaseOrderRequestPayloadType
     */
    public function getCancelPurchaseOrderRequestPayload()
    {
      return $this->CancelPurchaseOrderRequestPayload;
    }

    /**
     * @param CancelPurchaseOrderRequestPayloadType $CancelPurchaseOrderRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\CancelPurchaseOrderRequestMessageType
     */
    public function setCancelPurchaseOrderRequestPayload($CancelPurchaseOrderRequestPayload)
    {
      $this->CancelPurchaseOrderRequestPayload = $CancelPurchaseOrderRequestPayload;
      return $this;
    }

}
