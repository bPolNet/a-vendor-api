<?php

namespace BPolNet\A\VendorApi\Lib;

class ReceiptsListGroupType
{

    /**
     * @var ReceiptsListType[] $ReceiptsList
     */
    protected $ReceiptsList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceiptsListType[]
     */
    public function getReceiptsList()
    {
      return $this->ReceiptsList;
    }

    /**
     * @param ReceiptsListType[] $ReceiptsList
     * @return \BPolNet\A\VendorApi\Lib\ReceiptsListGroupType
     */
    public function setReceiptsList(array $ReceiptsList = null)
    {
      $this->ReceiptsList = $ReceiptsList;
      return $this;
    }

}
