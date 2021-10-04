<?php

namespace BPolNet\A\VendorApi\Lib;

class GetSalesReportDetailsResponsePayloadType
{

    /**
     * @var GetSalesReportDetailsResponseBodyType $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetSalesReportDetailsResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetSalesReportDetailsResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetSalesReportDetailsResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
