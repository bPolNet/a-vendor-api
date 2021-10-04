<?php

namespace BPolNet\A\VendorApi\Lib;

class SalesReportType
{

    /**
     * @var ItemLinesType $ItemLines
     */
    protected $ItemLines = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemLinesType
     */
    public function getItemLines()
    {
      return $this->ItemLines;
    }

    /**
     * @param ItemLinesType $ItemLines
     * @return \BPolNet\A\VendorApi\Lib\SalesReportType
     */
    public function setItemLines($ItemLines)
    {
      $this->ItemLines = $ItemLines;
      return $this;
    }

}
