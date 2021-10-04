<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoriesResponsePayloadType
{

    /**
     * @var GetPlatformCategoriesResponseBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPlatformCategoriesResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetPlatformCategoriesResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoriesResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
