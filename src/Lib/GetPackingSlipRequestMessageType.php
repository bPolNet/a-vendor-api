<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPackingSlipRequestMessageType
{

    /**
     * @var GetPackingSlipRequestPayloadType $GetPackingSlipRequestPayload
     */
    protected $GetPackingSlipRequestPayload = null;

    /**
     * @param GetPackingSlipRequestPayloadType $GetPackingSlipRequestPayload
     */
    public function __construct($GetPackingSlipRequestPayload)
    {
      $this->GetPackingSlipRequestPayload = $GetPackingSlipRequestPayload;
    }

    /**
     * @return GetPackingSlipRequestPayloadType
     */
    public function getGetPackingSlipRequestPayload()
    {
      return $this->GetPackingSlipRequestPayload;
    }

    /**
     * @param GetPackingSlipRequestPayloadType $GetPackingSlipRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\GetPackingSlipRequestMessageType
     */
    public function setGetPackingSlipRequestPayload($GetPackingSlipRequestPayload)
    {
      $this->GetPackingSlipRequestPayload = $GetPackingSlipRequestPayload;
      return $this;
    }

}
