<?php

namespace BPolNet\A\VendorApi\Lib;

class DateTimeListType
{

    /**
     * @var dateTime[] $Item
     */
    protected $Item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return dateTime[]
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param dateTime[] $Item
     * @return \BPolNet\A\VendorApi\Lib\DateTimeListType
     */
    public function setItem(array $Item = null)
    {
      $this->Item = $Item;
      return $this;
    }

}
