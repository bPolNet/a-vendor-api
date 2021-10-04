<?php

namespace BPolNet\A\VendorApi\Lib;

class ContainerType
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Heigth
     */
    protected $Heigth = null;

    /**
     * @var string $Width
     */
    protected $Width = null;

    /**
     * @var string $Depth
     */
    protected $Depth = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @var ContainerContentType[] $Content
     */
    protected $Content = null;

    /**
     * @param ContainerContentType[] $Content
     */
    public function __construct(array $Content)
    {
      $this->Content = $Content;
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeigth()
    {
      return $this->Heigth;
    }

    /**
     * @param string $Heigth
     * @return \BPolNet\A\VendorApi\Lib\ContainerType
     */
    public function setHeigth($Heigth)
    {
      $this->Heigth = $Heigth;
      return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param string $Width
     * @return \BPolNet\A\VendorApi\Lib\ContainerType
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepth()
    {
      return $this->Depth;
    }

    /**
     * @param string $Depth
     * @return \BPolNet\A\VendorApi\Lib\ContainerType
     */
    public function setDepth($Depth)
    {
      $this->Depth = $Depth;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return \BPolNet\A\VendorApi\Lib\ContainerType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return ContainerContentType[]
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ContainerContentType[] $Content
     * @return \BPolNet\A\VendorApi\Lib\ContainerType
     */
    public function setContent(array $Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
