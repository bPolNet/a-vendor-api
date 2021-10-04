<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoryParametersRequestBodyType
{

    /**
     * @var string $CategoryId
     */
    protected $CategoryId = null;

    /**
     * @param string $CategoryId
     */
    public function __construct($CategoryId)
    {
      $this->CategoryId = $CategoryId;
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
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoryParametersRequestBodyType
     */
    public function setCategoryId($CategoryId)
    {
      $this->CategoryId = $CategoryId;
      return $this;
    }

}
