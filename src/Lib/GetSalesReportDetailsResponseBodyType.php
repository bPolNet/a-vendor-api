<?php

namespace BPolNet\A\VendorApi\Lib;

class GetSalesReportDetailsResponseBodyType
{

    /**
     * @var SalesReportType $SalesReport
     */
    protected $SalesReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesReportType
     */
    public function getSalesReport()
    {
      return $this->SalesReport;
    }

    /**
     * @param SalesReportType $SalesReport
     * @return \BPolNet\A\VendorApi\Lib\GetSalesReportDetailsResponseBodyType
     */
    public function setSalesReport($SalesReport)
    {
      $this->SalesReport = $SalesReport;
      return $this;
    }

}
