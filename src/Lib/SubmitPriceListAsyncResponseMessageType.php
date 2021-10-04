<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitPriceListAsyncResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var SubmitPriceListAsyncResponsePayloadType $SubmitPriceListAsyncResponsePayload
     */
    protected $SubmitPriceListAsyncResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param SubmitPriceListAsyncResponsePayloadType $SubmitPriceListAsyncResponsePayload
     */
    public function __construct($Header, $Result, $SubmitPriceListAsyncResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->SubmitPriceListAsyncResponsePayload = $SubmitPriceListAsyncResponsePayload;
    }

    /**
     * @return SubmitPriceListAsyncResponsePayloadType
     */
    public function getSubmitPriceListAsyncResponsePayload()
    {
      return $this->SubmitPriceListAsyncResponsePayload;
    }

    /**
     * @param SubmitPriceListAsyncResponsePayloadType $SubmitPriceListAsyncResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncResponseMessageType
     */
    public function setSubmitPriceListAsyncResponsePayload($SubmitPriceListAsyncResponsePayload)
    {
      $this->SubmitPriceListAsyncResponsePayload = $SubmitPriceListAsyncResponsePayload;
      return $this;
    }

}
