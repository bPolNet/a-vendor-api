<?php

namespace BPolNet\A\VendorApi\Lib;

class ConfirmPurchaseOrderRequestMessageType
{

    /**
     * @var ConfirmPurchaseOrderRequestPayloadType $ConfirmPurchaseOrderRequestPayload
     */
    protected $ConfirmPurchaseOrderRequestPayload = null;

    /**
     * @param ConfirmPurchaseOrderRequestPayloadType $ConfirmPurchaseOrderRequestPayload
     */
    public function __construct($ConfirmPurchaseOrderRequestPayload)
    {
      $this->ConfirmPurchaseOrderRequestPayload = $ConfirmPurchaseOrderRequestPayload;
    }

    /**
     * @return ConfirmPurchaseOrderRequestPayloadType
     */
    public function getConfirmPurchaseOrderRequestPayload()
    {
      return $this->ConfirmPurchaseOrderRequestPayload;
    }

    /**
     * @param ConfirmPurchaseOrderRequestPayloadType $ConfirmPurchaseOrderRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\ConfirmPurchaseOrderRequestMessageType
     */
    public function setConfirmPurchaseOrderRequestPayload($ConfirmPurchaseOrderRequestPayload)
    {
      $this->ConfirmPurchaseOrderRequestPayload = $ConfirmPurchaseOrderRequestPayload;
      return $this;
    }

}
