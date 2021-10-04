<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitArrivalNoticeResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var SubmitArrivalNoticeResponsePayloadType $SubmitArrivalNoticeResponsePayload
     */
    protected $SubmitArrivalNoticeResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param SubmitArrivalNoticeResponsePayloadType $SubmitArrivalNoticeResponsePayload
     */
    public function __construct($Header, $Result, $SubmitArrivalNoticeResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->SubmitArrivalNoticeResponsePayload = $SubmitArrivalNoticeResponsePayload;
    }

    /**
     * @return SubmitArrivalNoticeResponsePayloadType
     */
    public function getSubmitArrivalNoticeResponsePayload()
    {
      return $this->SubmitArrivalNoticeResponsePayload;
    }

    /**
     * @param SubmitArrivalNoticeResponsePayloadType $SubmitArrivalNoticeResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\SubmitArrivalNoticeResponseMessageType
     */
    public function setSubmitArrivalNoticeResponsePayload($SubmitArrivalNoticeResponsePayload)
    {
      $this->SubmitArrivalNoticeResponsePayload = $SubmitArrivalNoticeResponsePayload;
      return $this;
    }

}
