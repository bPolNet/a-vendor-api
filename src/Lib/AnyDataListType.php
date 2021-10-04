<?php

namespace BPolNet\A\VendorApi\Lib;

class AnyDataListType
{

    /**
     * @var anydata[] $Item
     */
    protected $Item = null;


    public function __construct()
    {

    }

    /**
     * @return anydata[]
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param anydata[] $Item
     * @return \BPolNet\A\VendorApi\Lib\AnyDataListType
     */
    public function setItem(array $Item = null)
    {
      $this->Item = $Item;
      return $this;
    }

}
