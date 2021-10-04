<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitPriceListRequestMessageType
{

    /**
     * @var SubmitPriceListRequestPayloadType $SubmitPriceListRequestPayload
     */
    protected $SubmitPriceListRequestPayload = null;

    /**
     * @param SubmitPriceListRequestPayloadType $SubmitPriceListRequestPayload
     */
    public function __construct($SubmitPriceListRequestPayload)
    {
      $this->SubmitPriceListRequestPayload = $SubmitPriceListRequestPayload;
    }

    /**
     * @return SubmitPriceListRequestPayloadType
     */
    public function getSubmitPriceListRequestPayload()
    {
      return $this->SubmitPriceListRequestPayload;
    }

    /**
     * @param SubmitPriceListRequestPayloadType $SubmitPriceListRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListRequestMessageType
     */
    public function setSubmitPriceListRequestPayload($SubmitPriceListRequestPayload)
    {
      $this->SubmitPriceListRequestPayload = $SubmitPriceListRequestPayload;
      return $this;
    }

}
