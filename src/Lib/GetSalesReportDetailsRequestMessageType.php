<?php

namespace BPolNet\A\VendorApi\Lib;

class GetSalesReportDetailsRequestMessageType
{

    /**
     * @var GetSalesReportDetailsRequestPayloadType $GetSalesReportDetailsRequestPayload
     */
    protected $GetSalesReportDetailsRequestPayload = null;

    /**
     * @param GetSalesReportDetailsRequestPayloadType $GetSalesReportDetailsRequestPayload
     */
    public function __construct($GetSalesReportDetailsRequestPayload)
    {
      $this->GetSalesReportDetailsRequestPayload = $GetSalesReportDetailsRequestPayload;
    }

    /**
     * @return GetSalesReportDetailsRequestPayloadType
     */
    public function getGetSalesReportDetailsRequestPayload()
    {
      return $this->GetSalesReportDetailsRequestPayload;
    }

    /**
     * @param GetSalesReportDetailsRequestPayloadType $GetSalesReportDetailsRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\GetSalesReportDetailsRequestMessageType
     */
    public function setGetSalesReportDetailsRequestPayload($GetSalesReportDetailsRequestPayload)
    {
      $this->GetSalesReportDetailsRequestPayload = $GetSalesReportDetailsRequestPayload;
      return $this;
    }

}
