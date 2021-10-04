<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPackingSlipRequestBodyType
{

    /**
     * @var string[] $ArrivalNoticeId
     */
    protected $ArrivalNoticeId = null;


    public function __construct()
    {

    }

    /**
     * @return string[]
     */
    public function getArrivalNoticeId()
    {
      return $this->ArrivalNoticeId;
    }

    /**
     * @param string[] $ArrivalNoticeId
     * @return \BPolNet\A\VendorApi\Lib\GetPackingSlipRequestBodyType
     */
    public function setArrivalNoticeId(array $ArrivalNoticeId = null)
    {
      $this->ArrivalNoticeId = $ArrivalNoticeId;
      return $this;
    }

}
