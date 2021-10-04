<?php

namespace BPolNet\A\VendorApi\Lib;

class GetCategoryParametersRequestPayloadType
{

    /**
     * @var GetCategoryParametersRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param GetCategoryParametersRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return GetCategoryParametersRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetCategoryParametersRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetCategoryParametersRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
