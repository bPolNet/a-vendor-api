<?php

namespace BPolNet\A\VendorApi\Lib;

class ParameterType
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
     * @var string[] $Value
     */
    protected $Value = null;

    /**
     * @param string $Id
     * @param string $Name
     */
    public function __construct($Id, $Name)
    {
      $this->Id = $Id;
      $this->Name = $Name;
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
     * @return \BPolNet\A\VendorApi\Lib\ParameterType
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
     * @return \BPolNet\A\VendorApi\Lib\ParameterType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string[] $Value
     * @return \BPolNet\A\VendorApi\Lib\ParameterType
     */
    public function setValue(array $Value = null)
    {
      $this->Value = $Value;
      return $this;
    }

}
