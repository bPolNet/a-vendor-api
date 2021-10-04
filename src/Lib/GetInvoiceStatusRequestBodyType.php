<?php

namespace BPolNet\A\VendorApi\Lib;

class GetInvoiceStatusRequestBodyType
{

    /**
     * @var string[] $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @param string[] $InvoiceId
     */
    public function __construct(array $InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
    }

    /**
     * @return string[]
     */
    public function getInvoiceId()
    {
      return $this->InvoiceId;
    }

    /**
     * @param string[] $InvoiceId
     * @return \BPolNet\A\VendorApi\Lib\GetInvoiceStatusRequestBodyType
     */
    public function setInvoiceId(array $InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

}
