<?php

namespace BPolNet\A\VendorApi\Lib;

class AttributeType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;


    public function __construct()
    {

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
     * @return \BPolNet\A\VendorApi\Lib\AttributeType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \BPolNet\A\VendorApi\Lib\AttributeType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
