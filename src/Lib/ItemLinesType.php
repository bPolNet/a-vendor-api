<?php

namespace BPolNet\A\VendorApi\Lib;

class ItemLinesType
{

    /**
     * @var ItemLineType[] $ItemLine
     */
    protected $ItemLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemLineType[]
     */
    public function getItemLine()
    {
      return $this->ItemLine;
    }

    /**
     * @param ItemLineType[] $ItemLine
     * @return \BPolNet\A\VendorApi\Lib\ItemLinesType
     */
    public function setItemLine(array $ItemLine = null)
    {
      $this->ItemLine = $ItemLine;
      return $this;
    }

}
