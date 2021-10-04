<?php

namespace BPolNet\A\VendorApi\Lib;

class GetSalesReportDetailsRequestBodyType
{

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     */
    public function __construct(\DateTime $StartDate, \DateTime $EndDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \BPolNet\A\VendorApi\Lib\GetSalesReportDetailsRequestBodyType
     */
    public function setStartDate(\DateTime $StartDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \BPolNet\A\VendorApi\Lib\GetSalesReportDetailsRequestBodyType
     */
    public function setEndDate(\DateTime $EndDate)
    {
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
      return $this;
    }

}
