<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitStockRequestBodyType
{

    /**
     * @var ProductStock[] $ProductStock
     */
    protected $ProductStock = null;

    /**
     * @param ProductStock[] $ProductStock
     */
    public function __construct(array $ProductStock)
    {
      $this->ProductStock = $ProductStock;
    }

    /**
     * @return ProductStock[]
     */
    public function getProductStock()
    {
      return $this->ProductStock;
    }

    /**
     * @param ProductStock[] $ProductStock
     * @return \BPolNet\A\VendorApi\Lib\SubmitStockRequestBodyType
     */
    public function setProductStock(array $ProductStock)
    {
      $this->ProductStock = $ProductStock;
      return $this;
    }

}
