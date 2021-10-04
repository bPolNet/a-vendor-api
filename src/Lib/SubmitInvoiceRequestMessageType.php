<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitInvoiceRequestMessageType
{

    /**
     * @var SubmitInvoiceRequestPayloadType $SubmitInvoiceRequestPayload
     */
    protected $SubmitInvoiceRequestPayload = null;

    /**
     * @param SubmitInvoiceRequestPayloadType $SubmitInvoiceRequestPayload
     */
    public function __construct($SubmitInvoiceRequestPayload)
    {
      $this->SubmitInvoiceRequestPayload = $SubmitInvoiceRequestPayload;
    }

    /**
     * @return SubmitInvoiceRequestPayloadType
     */
    public function getSubmitInvoiceRequestPayload()
    {
      return $this->SubmitInvoiceRequestPayload;
    }

    /**
     * @param SubmitInvoiceRequestPayloadType $SubmitInvoiceRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\SubmitInvoiceRequestMessageType
     */
    public function setSubmitInvoiceRequestPayload($SubmitInvoiceRequestPayload)
    {
      $this->SubmitInvoiceRequestPayload = $SubmitInvoiceRequestPayload;
      return $this;
    }

}
