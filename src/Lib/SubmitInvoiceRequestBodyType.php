<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitInvoiceRequestBodyType
{

    /**
     * @var PurchaseInvoiceType $PurchaseInvoice
     */
    protected $PurchaseInvoice = null;

    /**
     * @param PurchaseInvoiceType $PurchaseInvoice
     */
    public function __construct($PurchaseInvoice)
    {
      $this->PurchaseInvoice = $PurchaseInvoice;
    }

    /**
     * @return PurchaseInvoiceType
     */
    public function getPurchaseInvoice()
    {
      return $this->PurchaseInvoice;
    }

    /**
     * @param PurchaseInvoiceType $PurchaseInvoice
     * @return \BPolNet\A\VendorApi\Lib\SubmitInvoiceRequestBodyType
     */
    public function setPurchaseInvoice($PurchaseInvoice)
    {
      $this->PurchaseInvoice = $PurchaseInvoice;
      return $this;
    }

}
