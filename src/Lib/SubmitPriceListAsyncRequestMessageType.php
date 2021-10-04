<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitPriceListAsyncRequestMessageType
{

    /**
     * @var SubmitPriceListAsyncRequestPayloadType $SubmitPriceListAsyncRequestPayload
     */
    protected $SubmitPriceListAsyncRequestPayload = null;

    /**
     * @param SubmitPriceListAsyncRequestPayloadType $SubmitPriceListAsyncRequestPayload
     */
    public function __construct($SubmitPriceListAsyncRequestPayload)
    {
      $this->SubmitPriceListAsyncRequestPayload = $SubmitPriceListAsyncRequestPayload;
    }

    /**
     * @return SubmitPriceListAsyncRequestPayloadType
     */
    public function getSubmitPriceListAsyncRequestPayload()
    {
      return $this->SubmitPriceListAsyncRequestPayload;
    }

    /**
     * @param SubmitPriceListAsyncRequestPayloadType $SubmitPriceListAsyncRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncRequestMessageType
     */
    public function setSubmitPriceListAsyncRequestPayload($SubmitPriceListAsyncRequestPayload)
    {
      $this->SubmitPriceListAsyncRequestPayload = $SubmitPriceListAsyncRequestPayload;
      return $this;
    }

}
