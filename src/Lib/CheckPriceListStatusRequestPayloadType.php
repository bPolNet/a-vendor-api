<?php

namespace BPolNet\A\VendorApi\Lib;

class CheckPriceListStatusRequestPayloadType
{

    /**
     * @var CheckPriceListStatusRequestBodyType $Body
     */
    protected $Body = null;


    public function __construct()
    {

    }

    /**
     * @return CheckPriceListStatusRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param CheckPriceListStatusRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\CheckPriceListStatusRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
