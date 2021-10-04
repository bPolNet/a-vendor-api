<?php

namespace BPolNet\A\VendorApi\Lib;

class ItemLineType
{

    /**
     * @var float $PackingSlipLineAmount
     */
    protected $PackingSlipLineAmount = null;

    /**
     * @var string $ExternalItemId
     */
    protected $ExternalItemId = null;

    /**
     * @var string $ItemBarCode
     */
    protected $ItemBarCode = null;

    /**
     * @var string $ItemContributionRatioType
     */
    protected $ItemContributionRatioType = null;

    /**
     * @var float $ItemContributionRatioValue
     */
    protected $ItemContributionRatioValue = null;

    /**
     * @var string $ItemId
     */
    protected $ItemId = null;

    /**
     * @var float $PackingSlipLineNumber
     */
    protected $PackingSlipLineNumber = null;

    /**
     * @var \DateTime $PackingSlipDate
     */
    protected $PackingSlipDate = null;

    /**
     * @var string $PackingSlipId
     */
    protected $PackingSlipId = null;

    /**
     * @var float $PackingSlipUnitPrice
     */
    protected $PackingSlipUnitPrice = null;

    /**
     * @var string $PriceListJournalNumber
     */
    protected $PriceListJournalNumber = null;

    /**
     * @var float $PriceListLineAmount
     */
    protected $PriceListLineAmount = null;

    /**
     * @var float $PriceListUnitPrice
     */
    protected $PriceListUnitPrice = null;

    /**
     * @var string $PurchaseId
     */
    protected $PurchaseId = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getPackingSlipLineAmount()
    {
      return $this->PackingSlipLineAmount;
    }

    /**
     * @param float $PackingSlipLineAmount
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setPackingSlipLineAmount($PackingSlipLineAmount)
    {
      $this->PackingSlipLineAmount = $PackingSlipLineAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalItemId()
    {
      return $this->ExternalItemId;
    }

    /**
     * @param string $ExternalItemId
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setExternalItemId($ExternalItemId)
    {
      $this->ExternalItemId = $ExternalItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemBarCode()
    {
      return $this->ItemBarCode;
    }

    /**
     * @param string $ItemBarCode
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setItemBarCode($ItemBarCode)
    {
      $this->ItemBarCode = $ItemBarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemContributionRatioType()
    {
      return $this->ItemContributionRatioType;
    }

    /**
     * @param string $ItemContributionRatioType
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setItemContributionRatioType($ItemContributionRatioType)
    {
      $this->ItemContributionRatioType = $ItemContributionRatioType;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemContributionRatioValue()
    {
      return $this->ItemContributionRatioValue;
    }

    /**
     * @param float $ItemContributionRatioValue
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setItemContributionRatioValue($ItemContributionRatioValue)
    {
      $this->ItemContributionRatioValue = $ItemContributionRatioValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
      return $this->ItemId;
    }

    /**
     * @param string $ItemId
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    /**
     * @return float
     */
    public function getPackingSlipLineNumber()
    {
      return $this->PackingSlipLineNumber;
    }

    /**
     * @param float $PackingSlipLineNumber
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setPackingSlipLineNumber($PackingSlipLineNumber)
    {
      $this->PackingSlipLineNumber = $PackingSlipLineNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPackingSlipDate()
    {
      if ($this->PackingSlipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PackingSlipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PackingSlipDate
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setPackingSlipDate(\DateTime $PackingSlipDate = null)
    {
      if ($PackingSlipDate == null) {
       $this->PackingSlipDate = null;
      } else {
        $this->PackingSlipDate = $PackingSlipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPackingSlipId()
    {
      return $this->PackingSlipId;
    }

    /**
     * @param string $PackingSlipId
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setPackingSlipId($PackingSlipId)
    {
      $this->PackingSlipId = $PackingSlipId;
      return $this;
    }

    /**
     * @return float
     */
    public function getPackingSlipUnitPrice()
    {
      return $this->PackingSlipUnitPrice;
    }

    /**
     * @param float $PackingSlipUnitPrice
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setPackingSlipUnitPrice($PackingSlipUnitPrice)
    {
      $this->PackingSlipUnitPrice = $PackingSlipUnitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceListJournalNumber()
    {
      return $this->PriceListJournalNumber;
    }

    /**
     * @param string $PriceListJournalNumber
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setPriceListJournalNumber($PriceListJournalNumber)
    {
      $this->PriceListJournalNumber = $PriceListJournalNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceListLineAmount()
    {
      return $this->PriceListLineAmount;
    }

    /**
     * @param float $PriceListLineAmount
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setPriceListLineAmount($PriceListLineAmount)
    {
      $this->PriceListLineAmount = $PriceListLineAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceListUnitPrice()
    {
      return $this->PriceListUnitPrice;
    }

    /**
     * @param float $PriceListUnitPrice
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setPriceListUnitPrice($PriceListUnitPrice)
    {
      $this->PriceListUnitPrice = $PriceListUnitPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseId()
    {
      return $this->PurchaseId;
    }

    /**
     * @param string $PurchaseId
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setPurchaseId($PurchaseId)
    {
      $this->PurchaseId = $PurchaseId;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \BPolNet\A\VendorApi\Lib\ItemLineType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
