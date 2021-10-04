<?php

namespace BPolNet\A\VendorApi\Lib;

class StringListType
{

    /**
     * @var string[] $Item
     */
    protected $Item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param string[] $Item
     * @return \BPolNet\A\VendorApi\Lib\StringListType
     */
    public function setItem(array $Item = null)
    {
      $this->Item = $Item;
      return $this;
    }

}
