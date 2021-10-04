<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPackingSlipRequestPayloadType
{

    /**
     * @var GetPackingSlipRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param GetPackingSlipRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return GetPackingSlipRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetPackingSlipRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetPackingSlipRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
