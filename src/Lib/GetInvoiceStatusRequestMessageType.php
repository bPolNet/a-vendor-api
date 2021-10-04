<?php

namespace BPolNet\A\VendorApi\Lib;

class GetInvoiceStatusRequestMessageType
{

    /**
     * @var GetInvoiceStatusRequestPayloadType $GetInvoiceStatusRequestPayload
     */
    protected $GetInvoiceStatusRequestPayload = null;

    /**
     * @param GetInvoiceStatusRequestPayloadType $GetInvoiceStatusRequestPayload
     */
    public function __construct($GetInvoiceStatusRequestPayload)
    {
      $this->GetInvoiceStatusRequestPayload = $GetInvoiceStatusRequestPayload;
    }

    /**
     * @return GetInvoiceStatusRequestPayloadType
     */
    public function getGetInvoiceStatusRequestPayload()
    {
      return $this->GetInvoiceStatusRequestPayload;
    }

    /**
     * @param GetInvoiceStatusRequestPayloadType $GetInvoiceStatusRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\GetInvoiceStatusRequestMessageType
     */
    public function setGetInvoiceStatusRequestPayload($GetInvoiceStatusRequestPayload)
    {
      $this->GetInvoiceStatusRequestPayload = $GetInvoiceStatusRequestPayload;
      return $this;
    }

}
