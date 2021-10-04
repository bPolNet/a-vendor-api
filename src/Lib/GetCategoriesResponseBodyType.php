<?php

namespace BPolNet\A\VendorApi\Lib;

class GetCategoriesResponseBodyType
{

    /**
     * @var ProductCategoryListType $ProductCategoryTree
     */
    protected $ProductCategoryTree = null;

    /**
     * @param ProductCategoryListType $ProductCategoryTree
     */
    public function __construct($ProductCategoryTree)
    {
      $this->ProductCategoryTree = $ProductCategoryTree;
    }

    /**
     * @return ProductCategoryListType
     */
    public function getProductCategoryTree()
    {
      return $this->ProductCategoryTree;
    }

    /**
     * @param ProductCategoryListType $ProductCategoryTree
     * @return \BPolNet\A\VendorApi\Lib\GetCategoriesResponseBodyType
     */
    public function setProductCategoryTree($ProductCategoryTree)
    {
      $this->ProductCategoryTree = $ProductCategoryTree;
      return $this;
    }

}
