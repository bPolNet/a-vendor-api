<?php

namespace BPolNet\A\VendorApi\Lib;

class GetSalesReportDetailsRequestPayloadType
{

    /**
     * @var GetSalesReportDetailsRequestBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetSalesReportDetailsRequestBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetSalesReportDetailsRequestBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetSalesReportDetailsRequestPayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
