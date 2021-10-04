<?php

namespace BPolNet\A\VendorApi\Lib;

class GetInvoiceStatusResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var GetInvoiceStatusResponsePayloadType $GetInvoiceStatusResponsePayload
     */
    protected $GetInvoiceStatusResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param GetInvoiceStatusResponsePayloadType $GetInvoiceStatusResponsePayload
     */
    public function __construct($Header, $Result, $GetInvoiceStatusResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->GetInvoiceStatusResponsePayload = $GetInvoiceStatusResponsePayload;
    }

    /**
     * @return GetInvoiceStatusResponsePayloadType
     */
    public function getGetInvoiceStatusResponsePayload()
    {
      return $this->GetInvoiceStatusResponsePayload;
    }

    /**
     * @param GetInvoiceStatusResponsePayloadType $GetInvoiceStatusResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\GetInvoiceStatusResponseMessageType
     */
    public function setGetInvoiceStatusResponsePayload($GetInvoiceStatusResponsePayload)
    {
      $this->GetInvoiceStatusResponsePayload = $GetInvoiceStatusResponsePayload;
      return $this;
    }

}
