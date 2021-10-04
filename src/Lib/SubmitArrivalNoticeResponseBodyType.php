<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitArrivalNoticeResponseBodyType
{

    /**
     * @var string $ArrivalNoticeId
     */
    protected $ArrivalNoticeId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getArrivalNoticeId()
    {
      return $this->ArrivalNoticeId;
    }

    /**
     * @param string $ArrivalNoticeId
     * @return \BPolNet\A\VendorApi\Lib\SubmitArrivalNoticeResponseBodyType
     */
    public function setArrivalNoticeId($ArrivalNoticeId)
    {
      $this->ArrivalNoticeId = $ArrivalNoticeId;
      return $this;
    }

}
