<?php

namespace BPolNet\A\VendorApi\Lib;

class GetInvoiceStatusResponseBodyType
{

    /**
     * @var InvoiceStatus[] $InvoiceStatus
     */
    protected $InvoiceStatus = null;


    public function __construct()
    {

    }

    /**
     * @return InvoiceStatus[]
     */
    public function getInvoiceStatus()
    {
      return $this->InvoiceStatus;
    }

    /**
     * @param InvoiceStatus[] $InvoiceStatus
     * @return \BPolNet\A\VendorApi\Lib\GetInvoiceStatusResponseBodyType
     */
    public function setInvoiceStatus(array $InvoiceStatus = null)
    {
      $this->InvoiceStatus = $InvoiceStatus;
      return $this;
    }

}
