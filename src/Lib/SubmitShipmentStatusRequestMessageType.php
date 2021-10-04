<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitShipmentStatusRequestMessageType
{

    /**
     * @var SubmitShipmentStatusRequestPayloadType $SubmitShipmentStatusRequestPayload
     */
    protected $SubmitShipmentStatusRequestPayload = null;

    /**
     * @param SubmitShipmentStatusRequestPayloadType $SubmitShipmentStatusRequestPayload
     */
    public function __construct($SubmitShipmentStatusRequestPayload)
    {
      $this->SubmitShipmentStatusRequestPayload = $SubmitShipmentStatusRequestPayload;
    }

    /**
     * @return SubmitShipmentStatusRequestPayloadType
     */
    public function getSubmitShipmentStatusRequestPayload()
    {
      return $this->SubmitShipmentStatusRequestPayload;
    }

    /**
     * @param SubmitShipmentStatusRequestPayloadType $SubmitShipmentStatusRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\SubmitShipmentStatusRequestMessageType
     */
    public function setSubmitShipmentStatusRequestPayload($SubmitShipmentStatusRequestPayload)
    {
      $this->SubmitShipmentStatusRequestPayload = $SubmitShipmentStatusRequestPayload;
      return $this;
    }

}
