<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoriesRequestPayloadType
{

    /**
     * @var GetPlatformCategoriesRequestBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPlatformCategoriesRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetPlatformCategoriesRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoriesRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
