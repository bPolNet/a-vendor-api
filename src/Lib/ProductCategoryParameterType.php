<?php

namespace BPolNet\A\VendorApi\Lib;

class ProductCategoryParameterType
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Unit
     */
    protected $Unit = null;

    /**
     * @var string $Required
     */
    protected $Required = null;

    /**
     * @var Group $Group
     */
    protected $Group = null;

    /**
     * @var Dictionary $Dictionary
     */
    protected $Dictionary = null;

    /**
     * @var ValueRestrictions $ValueRestrictions
     */
    protected $ValueRestrictions = null;

    /**
     * @var Options $Options
     */
    protected $Options = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParameterType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParameterType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParameterType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParameterType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
      return $this->Unit;
    }

    /**
     * @param string $Unit
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParameterType
     */
    public function setUnit($Unit)
    {
      $this->Unit = $Unit;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequired()
    {
      return $this->Required;
    }

    /**
     * @param string $Required
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParameterType
     */
    public function setRequired($Required)
    {
      $this->Required = $Required;
      return $this;
    }

    /**
     * @return Group
     */
    public function getGroup()
    {
      return $this->Group;
    }

    /**
     * @param Group $Group
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParameterType
     */
    public function setGroup($Group)
    {
      $this->Group = $Group;
      return $this;
    }

    /**
     * @return Dictionary
     */
    public function getDictionary()
    {
      return $this->Dictionary;
    }

    /**
     * @param Dictionary $Dictionary
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParameterType
     */
    public function setDictionary($Dictionary)
    {
      $this->Dictionary = $Dictionary;
      return $this;
    }

    /**
     * @return ValueRestrictions
     */
    public function getValueRestrictions()
    {
      return $this->ValueRestrictions;
    }

    /**
     * @param ValueRestrictions $ValueRestrictions
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParameterType
     */
    public function setValueRestrictions($ValueRestrictions)
    {
      $this->ValueRestrictions = $ValueRestrictions;
      return $this;
    }

    /**
     * @return Options
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param Options $Options
     * @return \BPolNet\A\VendorApi\Lib\ProductCategoryParameterType
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
      return $this;
    }

}
