<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitProductInfoRequestBodyType
{

    /**
     * @var ProductType[] $Product
     */
    protected $Product = null;

    /**
     * @param ProductType[] $Product
     */
    public function __construct(array $Product)
    {
      $this->Product = $Product;
    }

    /**
     * @return ProductType[]
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param ProductType[] $Product
     * @return \BPolNet\A\VendorApi\Lib\SubmitProductInfoRequestBodyType
     */
    public function setProduct(array $Product)
    {
      $this->Product = $Product;
      return $this;
    }

}
