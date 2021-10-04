<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitInvoiceRequestPayloadType
{

    /**
     * @var SubmitInvoiceRequestBodyType $Body
     */
    protected $Body = null;

    /**
     * @param SubmitInvoiceRequestBodyType $Body
     */
    public function __construct($Body)
    {
      $this->Body = $Body;
    }

    /**
     * @return SubmitInvoiceRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param SubmitInvoiceRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\SubmitInvoiceRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
