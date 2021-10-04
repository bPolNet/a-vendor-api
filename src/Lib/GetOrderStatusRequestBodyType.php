<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusRequestBodyType
{

    /**
     * @var date $FromDate
     */
    protected $FromDate = null;

    /**
     * @var date $ToDate
     */
    protected $ToDate = null;

    /**
     * @var RequestList $RequestList
     */
    protected $RequestList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return date
     */
    public function getFromDate()
    {
      return $this->FromDate;
    }

    /**
     * @param date $FromDate
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusRequestBodyType
     */
    public function setFromDate($FromDate)
    {
      $this->FromDate = $FromDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getToDate()
    {
      return $this->ToDate;
    }

    /**
     * @param date $ToDate
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusRequestBodyType
     */
    public function setToDate($ToDate)
    {
      $this->ToDate = $ToDate;
      return $this;
    }

    /**
     * @return RequestList
     */
    public function getRequestList()
    {
      return $this->RequestList;
    }

    /**
     * @param RequestList $RequestList
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusRequestBodyType
     */
    public function setRequestList($RequestList)
    {
      $this->RequestList = $RequestList;
      return $this;
    }

}
