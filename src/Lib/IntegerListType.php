<?php

namespace BPolNet\A\VendorApi\Lib;

class IntegerListType
{

    /**
     * @var int[] $Item
     */
    protected $Item = null;


    public function __construct()
    {

    }

    /**
     * @return int[]
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param int[] $Item
     * @return \BPolNet\A\VendorApi\Lib\IntegerListType
     */
    public function setItem(array $Item = null)
    {
      $this->Item = $Item;
      return $this;
    }

}
