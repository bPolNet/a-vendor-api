<?php

namespace BPolNet\A\VendorApi\Lib;

class ProductCategoryType
{

    /**
     * @var string $CategoryId
     */
    protected $CategoryId = null;

    /**
     * @var string $ParentId
     */
    protected $ParentId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $LeafFlag
     */
    protected $LeafFlag = null;

    /**
     * @var int $Depth
     */
    protected $Depth = null;

    /**
     * @var OptionsType $Options
     */
    protected $Options = null;

    /**
     * @var ProductCategoryListType $Subcategories
     */
    protected $Subcategories = null;

    
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
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryType
     */
    public function setCategoryId($CategoryId)
    {
      $this->CategoryId = $CategoryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentId()
    {
      return $this->ParentId;
    }

    /**
     * @param string $ParentId
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryType
     */
    public function setParentId($ParentId)
    {
      $this->ParentId = $ParentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLeafFlag()
    {
      return $this->LeafFlag;
    }

    /**
     * @param boolean $LeafFlag
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryType
     */
    public function setLeafFlag($LeafFlag)
    {
      $this->LeafFlag = $LeafFlag;
      return $this;
    }

    /**
     * @return int
     */
    public function getDepth()
    {
      return $this->Depth;
    }

    /**
     * @param int $Depth
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryType
     */
    public function setDepth($Depth)
    {
      $this->Depth = $Depth;
      return $this;
    }

    /**
     * @return OptionsType
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param OptionsType $Options
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryType
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
      return $this;
    }

    /**
     * @return ProductCategoryListType
     */
    public function getSubcategories()
    {
      return $this->Subcategories;
    }

    /**
     * @param ProductCategoryListType $Subcategories
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryType
     */
    public function setSubcategories($Subcategories)
    {
      $this->Subcategories = $Subcategories;
      return $this;
    }

}
