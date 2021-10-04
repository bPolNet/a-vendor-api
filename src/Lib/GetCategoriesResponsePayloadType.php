<?php

namespace BPolNet\A\VendorApi\Lib;

class GetCategoriesResponsePayloadType
{

    /**
     * @var GetCategoriesResponseBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCategoriesResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetCategoriesResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetCategoriesResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
