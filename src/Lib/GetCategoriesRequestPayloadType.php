<?php

namespace BPolNet\A\VendorApi\Lib;

class GetCategoriesRequestPayloadType
{

    /**
     * @var GetCategoriesRequestBodyType $Body
     */
    protected $Body = null;


    public function __construct()
    {

    }

    /**
     * @return GetCategoriesRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetCategoriesRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetCategoriesRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
