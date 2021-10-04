<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPackingSlipResponsePayloadType
{

    /**
     * @var GetPackingSlipResponseBodyType $Body
     */
    protected $Body = null;


    public function __construct()
    {

    }

    /**
     * @return GetPackingSlipResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetPackingSlipResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetPackingSlipResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
