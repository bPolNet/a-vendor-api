<?php

namespace BPolNet\A\VendorApi\Lib;

class CheckPriceListStatusResponsePayloadType
{

    /**
     * @var CheckPriceListStatusResponseBodyType $Body
     */
    protected $Body = null;


    public function __construct()
    {

    }

    /**
     * @return CheckPriceListStatusResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param CheckPriceListStatusResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\CheckPriceListStatusResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
