<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitArrivalNoticeRequestMessageType
{

    /**
     * @var SubmitArrivalNoticeRequestPayloadType $SubmitArrivalNoticeRequestPayload
     */
    protected $SubmitArrivalNoticeRequestPayload = null;

    /**
     * @param SubmitArrivalNoticeRequestPayloadType $SubmitArrivalNoticeRequestPayload
     */
    public function __construct($SubmitArrivalNoticeRequestPayload)
    {
      $this->SubmitArrivalNoticeRequestPayload = $SubmitArrivalNoticeRequestPayload;
    }

    /**
     * @return SubmitArrivalNoticeRequestPayloadType
     */
    public function getSubmitArrivalNoticeRequestPayload()
    {
      return $this->SubmitArrivalNoticeRequestPayload;
    }

    /**
     * @param SubmitArrivalNoticeRequestPayloadType $SubmitArrivalNoticeRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\SubmitArrivalNoticeRequestMessageType
     */
    public function setSubmitArrivalNoticeRequestPayload($SubmitArrivalNoticeRequestPayload)
    {
      $this->SubmitArrivalNoticeRequestPayload = $SubmitArrivalNoticeRequestPayload;
      return $this;
    }

}
