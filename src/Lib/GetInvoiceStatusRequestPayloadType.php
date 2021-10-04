<?php

namespace BPolNet\A\VendorApi\Lib;

class GetInvoiceStatusRequestPayloadType
{

    /**
     * @var GetInvoiceStatusRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param GetInvoiceStatusRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return GetInvoiceStatusRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetInvoiceStatusRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetInvoiceStatusRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
