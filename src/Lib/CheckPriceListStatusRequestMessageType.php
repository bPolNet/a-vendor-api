<?php

namespace BPolNet\A\VendorApi\Lib;

class CheckPriceListStatusRequestMessageType
{

    /**
     * @var CheckPriceListStatusRequestPayloadType $CheckPriceListStatusRequestPayload
     */
    protected $CheckPriceListStatusRequestPayload = null;

    /**
     * @param CheckPriceListStatusRequestPayloadType $CheckPriceListStatusRequestPayload
     */
    public function __construct($CheckPriceListStatusRequestPayload)
    {
      $this->CheckPriceListStatusRequestPayload = $CheckPriceListStatusRequestPayload;
    }

    /**
     * @return CheckPriceListStatusRequestPayloadType
     */
    public function getCheckPriceListStatusRequestPayload()
    {
      return $this->CheckPriceListStatusRequestPayload;
    }

    /**
     * @param CheckPriceListStatusRequestPayloadType $CheckPriceListStatusRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\CheckPriceListStatusRequestMessageType
     */
    public function setCheckPriceListStatusRequestPayload($CheckPriceListStatusRequestPayload)
    {
      $this->CheckPriceListStatusRequestPayload = $CheckPriceListStatusRequestPayload;
      return $this;
    }

}
