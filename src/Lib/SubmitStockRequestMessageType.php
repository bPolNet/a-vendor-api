<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitStockRequestMessageType
{

    /**
     * @var SubmitStockRequestPayloadType $SubmitStockRequestPayload
     */
    protected $SubmitStockRequestPayload = null;

    /**
     * @param SubmitStockRequestPayloadType $SubmitStockRequestPayload
     */
    public function __construct($SubmitStockRequestPayload)
    {
      $this->SubmitStockRequestPayload = $SubmitStockRequestPayload;
    }

    /**
     * @return SubmitStockRequestPayloadType
     */
    public function getSubmitStockRequestPayload()
    {
      return $this->SubmitStockRequestPayload;
    }

    /**
     * @param SubmitStockRequestPayloadType $SubmitStockRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\SubmitStockRequestMessageType
     */
    public function setSubmitStockRequestPayload($SubmitStockRequestPayload)
    {
      $this->SubmitStockRequestPayload = $SubmitStockRequestPayload;
      return $this;
    }

}
