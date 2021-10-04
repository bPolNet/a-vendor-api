<?php

namespace BPolNet\A\VendorApi\Lib;

class NameValueListType
{

    /**
     * @var NameValueType[] $Item
     */
    protected $Item = null;


    public function __construct()
    {

    }

    /**
     * @return NameValueType[]
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param NameValueType[] $Item
     * @return \BPolNet\A\VendorApi\Lib\NameValueListType
     */
    public function setItem(array $Item = null)
    {
      $this->Item = $Item;
      return $this;
    }

}
