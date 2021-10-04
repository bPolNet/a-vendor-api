<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitArrivalNoticeResponsePayloadType
{

    /**
     * @var SubmitArrivalNoticeResponseBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubmitArrivalNoticeResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param SubmitArrivalNoticeResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\SubmitArrivalNoticeResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
