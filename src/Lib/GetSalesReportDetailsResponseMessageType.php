<?php

namespace BPolNet\A\VendorApi\Lib;

class GetSalesReportDetailsResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var GetSalesReportDetailsResponsePayloadType $GetSalesReportDetailsResponsePayload
     */
    protected $GetSalesReportDetailsResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param GetSalesReportDetailsResponsePayloadType $GetSalesReportDetailsResponsePayload
     */
    public function __construct($Header, $Result, $GetSalesReportDetailsResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->GetSalesReportDetailsResponsePayload = $GetSalesReportDetailsResponsePayload;
    }

    /**
     * @return GetSalesReportDetailsResponsePayloadType
     */
    public function getGetSalesReportDetailsResponsePayload()
    {
      return $this->GetSalesReportDetailsResponsePayload;
    }

    /**
     * @param GetSalesReportDetailsResponsePayloadType $GetSalesReportDetailsResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\GetSalesReportDetailsResponseMessageType
     */
    public function setGetSalesReportDetailsResponsePayload($GetSalesReportDetailsResponsePayload)
    {
      $this->GetSalesReportDetailsResponsePayload = $GetSalesReportDetailsResponsePayload;
      return $this;
    }

}
