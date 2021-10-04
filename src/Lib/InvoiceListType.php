<?php

namespace BPolNet\A\VendorApi\Lib;

class InvoiceListType
{

    /**
     * @var InvoiceType[] $Invoice
     */
    protected $Invoice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InvoiceType[]
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param InvoiceType[] $Invoice
     * @return \BPolNet\A\VendorApi\Lib\InvoiceListType
     */
    public function setInvoice(array $Invoice = null)
    {
      $this->Invoice = $Invoice;
      return $this;
    }

}
