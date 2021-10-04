<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitPriceListAsyncResponsePayloadType
{

    /**
     * @var SubmitPriceListAsyncResponseBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubmitPriceListAsyncResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param SubmitPriceListAsyncResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
