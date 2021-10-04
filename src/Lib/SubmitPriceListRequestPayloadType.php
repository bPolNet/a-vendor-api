<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitPriceListRequestPayloadType
{

    /**
     * @var SubmitPriceListRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param SubmitPriceListRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return SubmitPriceListRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param SubmitPriceListRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
