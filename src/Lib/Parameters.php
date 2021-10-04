<?php

namespace BPolNet\A\VendorApi\Lib;

class Parameters
{

    /**
     * @var ProductCategoryParameterType $Parameter
     */
    protected $Parameter = null;

    /**
     * @param ProductCategoryParameterType $Parameter
     */
    public function __construct($Parameter)
    {
      $this->Parameter = $Parameter;
    }

    /**
     * @return ProductCategoryParameterType
     */
    public function getParameter()
    {
      return $this->Parameter;
    }

    /**
     * @param ProductCategoryParameterType $Parameter
     * @return \BPolNet\A\VendorApi\Lib\Parameters
     */
    public function setParameter($Parameter)
    {
      $this->Parameter = $Parameter;
      return $this;
    }

}
