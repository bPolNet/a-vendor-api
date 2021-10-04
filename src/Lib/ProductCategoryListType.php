<?php

namespace BPolNet\A\VendorApi\Lib;

class ProductCategoryListType
{

    /**
     * @var ProductCategoryType[] $ProductCategory
     */
    protected $ProductCategory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductCategoryType[]
     */
    public function getProductCategory()
    {
      return $this->ProductCategory;
    }

    /**
     * @param ProductCategoryType[] $ProductCategory
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryListType
     */
    public function setProductCategory(array $ProductCategory = null)
    {
      $this->ProductCategory = $ProductCategory;
      return $this;
    }

}
