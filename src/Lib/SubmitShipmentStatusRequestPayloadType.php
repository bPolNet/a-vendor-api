<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitShipmentStatusRequestPayloadType
{

    /**
     * @var SubmitShipmentStatusRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param SubmitShipmentStatusRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return SubmitShipmentStatusRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param SubmitShipmentStatusRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\SubmitShipmentStatusRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
