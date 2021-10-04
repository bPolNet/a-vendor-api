<?php

namespace BPolNet\A\VendorApi\Lib;

class InvoiceType
{

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var string $InvoiceId
     */
    protected $InvoiceId = null;


    public function __construct()
    {

    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
      if ($this->InvoiceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceDate
     * @return \BPolNet\A\VendorApi\Lib\InvoiceType
     */
    public function setInvoiceDate(\DateTime $InvoiceDate = null)
    {
      if ($InvoiceDate == null) {
       $this->InvoiceDate = null;
      } else {
        $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return \BPolNet\A\VendorApi\Lib\InvoiceType
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

}
