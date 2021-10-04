<?php

namespace BPolNet\A\VendorApi\Lib;

class ProductCategoryParametersType
{

    /**
     * @var Parameters $Parameters
     */
    protected $Parameters = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Parameters
     */
    public function getParameters()
    {
      return $this->Parameters;
    }

    /**
     * @param Parameters $Parameters
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParametersType
     */
    public function setParameters($Parameters)
    {
      $this->Parameters = $Parameters;
      return $this;
    }

}
