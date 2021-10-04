<?php

namespace BPolNet\A\VendorApi\Lib;

class Dictionary
{

    /**
     * @var Value $Value
     */
    protected $Value = null;

    /**
     * @param Value $Value
     */
    public function __construct($Value)
    {
      $this->Value = $Value;
    }

    /**
     * @return Value
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param Value $Value
     * @return \BPolNet\A\VendorApi\Lib\Dictionary
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
