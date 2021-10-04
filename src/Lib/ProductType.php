<?php

namespace BPolNet\A\VendorApi\Lib;

class ProductType
{

    /**
     * @var string $ExternalItemId
     */
    protected $ExternalItemId = null;

    /**
     * @var string $CategoryName
     */
    protected $CategoryName = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ParameterType[] $Parameter
     */
    protected $Parameter = null;

    /**
     * @var ImageType[] $Image
     */
    protected $Image = null;

    /**
     * @param string $ExternalItemId
     * @param string $CategoryName
     * @param string $Name
     * @param string $Description
     */
    public function __construct($ExternalItemId, $CategoryName, $Name, $Description)
    {
      $this->ExternalItemId = $ExternalItemId;
      $this->CategoryName = $CategoryName;
      $this->Name = $Name;
      $this->Description = $Description;
    }

    /**
     * @return string
     */
    public function getExternalItemId()
    {
      return $this->ExternalItemId;
    }

    /**
     * @param string $ExternalItemId
     * @return \BPolNet\A\VendorApi\Lib\ProductType
     */
    public function setExternalItemId($ExternalItemId)
    {
      $this->ExternalItemId = $ExternalItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->CategoryName;
    }

    /**
     * @param string $CategoryName
     * @return \BPolNet\A\VendorApi\Lib\ProductType
     */
    public function setCategoryName($CategoryName)
    {
      $this->CategoryName = $CategoryName;
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
     * @return \BPolNet\A\VendorApi\Lib\ProductType
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
     * @return \BPolNet\A\VendorApi\Lib\ProductType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ParameterType[]
     */
    public function getParameter()
    {
      return $this->Parameter;
    }

    /**
     * @param ParameterType[] $Parameter
     * @return \BPolNet\A\VendorApi\Lib\ProductType
     */
    public function setParameter(array $Parameter = null)
    {
      $this->Parameter = $Parameter;
      return $this;
    }

    /**
     * @return ImageType[]
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param ImageType[] $Image
     * @return \BPolNet\A\VendorApi\Lib\ProductType
     */
    public function setImage(array $Image = null)
    {
      $this->Image = $Image;
      return $this;
    }

}
