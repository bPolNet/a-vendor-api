<?php

namespace BPolNet\A\VendorApi\Lib;

class InvoiceStatus
{

    /**
     * @var string $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var string $InvoiceStatus
     */
    protected $InvoiceStatus = null;

    /**
     * @param string $InvoiceId
     * @param string $InvoiceStatus
     */
    public function __construct($InvoiceId, $InvoiceStatus)
    {
      $this->InvoiceId = $InvoiceId;
      $this->InvoiceStatus = $InvoiceStatus;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
      return $this->InvoiceId;
    }

    /**
     * @param string $InvoiceId
     * @return \BPolNet\A\VendorApi\Lib\InvoiceStatus
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceStatus()
    {
      return $this->InvoiceStatus;
    }

    /**
     * @param string $InvoiceStatus
     * @return \BPolNet\A\VendorApi\Lib\InvoiceStatus
     */
    public function setInvoiceStatus($InvoiceStatus)
    {
      $this->InvoiceStatus = $InvoiceStatus;
      return $this;
    }

}
