<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitPriceListAsyncRequestPayloadType
{

    /**
     * @var SubmitPriceListAsyncRequestBodyType $Body
     */
    protected $Body = null;


    public function __construct()
    {
    }

    /**
     * @return SubmitPriceListAsyncRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param SubmitPriceListAsyncRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
