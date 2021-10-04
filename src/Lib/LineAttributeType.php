<?php

namespace BPolNet\A\VendorApi\Lib;

class LineAttributeType
{

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Value
     */
    protected $Value = null;


    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \BPolNet\A\VendorApi\Lib\LineAttributeType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return \BPolNet\A\VendorApi\Lib\LineAttributeType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \BPolNet\A\VendorApi\Lib\LineAttributeType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
