<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoryParametersResponsePayloadType
{

    /**
     * @var GetPlatformCategoryParametersResponseBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPlatformCategoryParametersResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetPlatformCategoryParametersResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoryParametersResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
