<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoryParametersResponseBodyType
{

    /**
     * @var ProductCategoryParametersType $ProductCategoryParameters
     */
    protected $ProductCategoryParameters = null;

    /**
     * @param ProductCategoryParametersType $ProductCategoryParameters
     */
    public function __construct($ProductCategoryParameters)
    {
      $this->ProductCategoryParameters = $ProductCategoryParameters;
    }

    /**
     * @return ProductCategoryParametersType
     */
    public function getProductCategoryParameters()
    {
      return $this->ProductCategoryParameters;
    }

    /**
     * @param ProductCategoryParametersType $ProductCategoryParameters
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoryParametersResponseBodyType
     */
    public function setProductCategoryParameters($ProductCategoryParameters)
    {
      $this->ProductCategoryParameters = $ProductCategoryParameters;
      return $this;
    }

}
