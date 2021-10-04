<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitProductInfoRequestPayloadType
{

    /**
     * @var SubmitProductInfoRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param SubmitProductInfoRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return SubmitProductInfoRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param SubmitProductInfoRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\SubmitProductInfoRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
