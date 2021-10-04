<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitArrivalNoticeRequestPayloadType
{

    /**
     * @var SubmitArrivalNoticeRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param SubmitArrivalNoticeRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return SubmitArrivalNoticeRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param SubmitArrivalNoticeRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\SubmitArrivalNoticeRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
