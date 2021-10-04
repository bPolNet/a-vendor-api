<?php

namespace BPolNet\A\VendorApi\Lib;

class GetCategoryParametersResponsePayloadType
{

    /**
     * @var GetCategoryParametersResponseBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCategoryParametersResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetCategoryParametersResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetCategoryParametersResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
