<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPackingSlipResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var GetPackingSlipResponsePayloadType $GetPackingSlipResponsePayload
     */
    protected $GetPackingSlipResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param GetPackingSlipResponsePayloadType $GetPackingSlipResponsePayload
     */
    public function __construct($Header, $Result, $GetPackingSlipResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->GetPackingSlipResponsePayload = $GetPackingSlipResponsePayload;
    }

    /**
     * @return GetPackingSlipResponsePayloadType
     */
    public function getGetPackingSlipResponsePayload()
    {
      return $this->GetPackingSlipResponsePayload;
    }

    /**
     * @param GetPackingSlipResponsePayloadType $GetPackingSlipResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\GetPackingSlipResponseMessageType
     */
    public function setGetPackingSlipResponsePayload($GetPackingSlipResponsePayload)
    {
      $this->GetPackingSlipResponsePayload = $GetPackingSlipResponsePayload;
      return $this;
    }

}
