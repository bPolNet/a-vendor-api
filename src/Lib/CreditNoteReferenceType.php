<?php

namespace BPolNet\A\VendorApi\Lib;

class CreditNoteReferenceType
{

    /**
     * @var string $OriginalInvoiceId
     */
    protected $OriginalInvoiceId = null;

    /**
     * @var date $OriginalInvoiceDate
     */
    protected $OriginalInvoiceDate = null;

    /**
     * @param string $OriginalInvoiceId
     * @param date $OriginalInvoiceDate
     */
    public function __construct($OriginalInvoiceId, $OriginalInvoiceDate)
    {
      $this->OriginalInvoiceId = $OriginalInvoiceId;
      $this->OriginalInvoiceDate = $OriginalInvoiceDate;
    }

    /**
     * @return string
     */
    public function getOriginalInvoiceId()
    {
      return $this->OriginalInvoiceId;
    }

    /**
     * @param string $OriginalInvoiceId
     * @return \BPolNet\A\VendorApi\Lib\CreditNoteReferenceType
     */
    public function setOriginalInvoiceId($OriginalInvoiceId)
    {
      $this->OriginalInvoiceId = $OriginalInvoiceId;
      return $this;
    }

    /**
     * @return date
     */
    public function getOriginalInvoiceDate()
    {
      return $this->OriginalInvoiceDate;
    }

    /**
     * @param date $OriginalInvoiceDate
     * @return \BPolNet\A\VendorApi\Lib\CreditNoteReferenceType
     */
    public function setOriginalInvoiceDate($OriginalInvoiceDate)
    {
      $this->OriginalInvoiceDate = $OriginalInvoiceDate;
      return $this;
    }

}
