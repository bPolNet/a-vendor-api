<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitArrivalNoticeRequestBodyType
{

    /**
     * @var ArrivalNoticeType $ArrivalNotice
     */
    protected $ArrivalNotice = null;

    /**
     * @param ArrivalNoticeType $ArrivalNotice
     */
    public function __construct($ArrivalNotice)
    {
      $this->ArrivalNotice = $ArrivalNotice;
    }

    /**
     * @return ArrivalNoticeType
     */
    public function getArrivalNotice()
    {
      return $this->ArrivalNotice;
    }

    /**
     * @param ArrivalNoticeType $ArrivalNotice
     * @return \BPolNet\A\VendorApi\Lib\SubmitArrivalNoticeRequestBodyType
     */
    public function setArrivalNotice($ArrivalNotice)
    {
      $this->ArrivalNotice = $ArrivalNotice;
      return $this;
    }

}
