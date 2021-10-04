<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitStockRequestPayloadType
{

    /**
     * @var SubmitStockRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param SubmitStockRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return SubmitStockRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param SubmitStockRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\SubmitStockRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
