<?php

namespace BPolNet\A\VendorApi\Lib;

class GetInvoiceStatusResponsePayloadType
{

    /**
     * @var GetInvoiceStatusResponseBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetInvoiceStatusResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetInvoiceStatusResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetInvoiceStatusResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
