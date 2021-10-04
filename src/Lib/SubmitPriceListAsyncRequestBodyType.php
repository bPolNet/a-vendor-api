<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitPriceListAsyncRequestBodyType
{

    /**
     * @var date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var date $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $ContributionRatioType
     */
    protected $ContributionRatioType = null;

    /**
     * @var ProductPrice[] $ProductPrice
     */
    protected $ProductPrice = null;

    /**
     * @param ProductPrice[] $ProductPrice
     */
    public function __construct(array $ProductPrice)
    {
      $this->ProductPrice = $ProductPrice;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param string $StartDate
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncRequestBodyType
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param string $EndDate
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncRequestBodyType
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getContributionRatioType()
    {
      return $this->ContributionRatioType;
    }

    /**
     * @param string $ContributionRatioType
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncRequestBodyType
     */
    public function setContributionRatioType($ContributionRatioType)
    {
      $this->ContributionRatioType = $ContributionRatioType;
      return $this;
    }

    /**
     * @return ProductPrice[]
     */
    public function getProductPrice()
    {
      return $this->ProductPrice;
    }

    /**
     * @param ProductPrice[] $ProductPrice
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncRequestBodyType
     */
    public function setProductPrice(array $ProductPrice)
    {
      $this->ProductPrice = $ProductPrice;
      return $this;
    }

}
