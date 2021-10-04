<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoryParametersRequestPayloadType
{

    /**
     * @var GetPlatformCategoryParametersRequestBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPlatformCategoryParametersRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetPlatformCategoryParametersRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoryParametersRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
