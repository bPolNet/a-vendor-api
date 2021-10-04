<?php

namespace BPolNet\A\VendorApi\Lib;

class DoubeListType
{

    /**
     * @var double[] $Item
     */
    protected $Item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return double[]
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param double[] $Item
     * @return \BPolNet\A\VendorApi\Lib\DoubeListType
     */
    public function setItem(array $Item = null)
    {
      $this->Item = $Item;
      return $this;
    }

}
