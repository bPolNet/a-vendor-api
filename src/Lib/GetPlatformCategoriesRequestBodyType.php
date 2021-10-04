<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoriesRequestBodyType
{

    /**
     * @var string $CategoryId
     */
    protected $CategoryId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCategoryId()
    {
      return $this->CategoryId;
    }

    /**
     * @param string $CategoryId
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoriesRequestBodyType
     */
    public function setCategoryId($CategoryId)
    {
      $this->CategoryId = $CategoryId;
      return $this;
    }

}
