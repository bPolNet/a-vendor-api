<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitProductInfoRequestMessageType
{

    /**
     * @var SubmitProductInfoRequestPayloadType $SubmitProductInfoRequestPayload
     */
    protected $SubmitProductInfoRequestPayload = null;

    /**
     * @param SubmitProductInfoRequestPayloadType $SubmitProductInfoRequestPayload
     */
    public function __construct($SubmitProductInfoRequestPayload)
    {
      $this->SubmitProductInfoRequestPayload = $SubmitProductInfoRequestPayload;
    }

    /**
     * @return SubmitProductInfoRequestPayloadType
     */
    public function getSubmitProductInfoRequestPayload()
    {
      return $this->SubmitProductInfoRequestPayload;
    }

    /**
     * @param SubmitProductInfoRequestPayloadType $SubmitProductInfoRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\SubmitProductInfoRequestMessageType
     */
    public function setSubmitProductInfoRequestPayload($SubmitProductInfoRequestPayload)
    {
      $this->SubmitProductInfoRequestPayload = $SubmitProductInfoRequestPayload;
      return $this;
    }

}
