<?php

namespace BPolNet\A\VendorApi\Lib;

class PurchaseInvoiceLineType
{

    /**
     * @var string $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @var string $ItemId
     */
    protected $ItemId = null;

    /**
     * @var string $ExternalItemId
     */
    protected $ExternalItemId = null;

    /**
     * @var string $ItemBarcode
     */
    protected $ItemBarcode = null;

    /**
     * @var string $ItemName
     */
    protected $ItemName = null;

    /**
     * @var string $UnitId
     */
    protected $UnitId = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $UnitPriceNet
     */
    protected $UnitPriceNet = null;

    /**
     * @var float $UnitPriceGross
     */
    protected $UnitPriceGross = null;

    /**
     * @var float $UnitPriceTax
     */
    protected $UnitPriceTax = null;

    /**
     * @var float $TaxRate
     */
    protected $TaxRate = null;

    /**
     * @var float $LineAmountNet
     */
    protected $LineAmountNet = null;

    /**
     * @var float $LineAmountGross
     */
    protected $LineAmountGross = null;

    /**
     * @var float $LineAmountTax
     */
    protected $LineAmountTax = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $OriginalInvoiceId
     */
    protected $OriginalInvoiceId = null;

    /**
     * @var string $OriginalLineNumber
     */
    protected $OriginalLineNumber = null;

    /**
     * @var string $PackingSlipIdReference
     */
    protected $PackingSlipIdReference = null;

    /**
     * @var string $PackingSlipLineNumberReference
     */
    protected $PackingSlipLineNumberReference = null;

    /**
     * @var LineAttributeType[] $LineAttribute
     */
    protected $LineAttribute = null;

    /**
     * @var OrderReferenceType $OrderReference
     */
    protected $OrderReference = null;

    /**
     * @param string $LineNumber
     * @param string $ExternalItemId
     * @param string $ItemName
     * @param string $UnitId
     * @param int $Quantity
     * @param float $UnitPriceNet
     * @param float $UnitPriceGross
     * @param float $UnitPriceTax
     * @param float $TaxRate
     * @param float $LineAmountNet
     * @param float $LineAmountGross
     * @param float $LineAmountTax
     */
    public function __construct($LineNumber, $ExternalItemId, $ItemName, $UnitId, $Quantity, $UnitPriceNet, $UnitPriceGross, $UnitPriceTax, $TaxRate, $LineAmountNet, $LineAmountGross, $LineAmountTax)
    {
      $this->LineNumber = $LineNumber;
      $this->ExternalItemId = $ExternalItemId;
      $this->ItemName = $ItemName;
      $this->UnitId = $UnitId;
      $this->Quantity = $Quantity;
      $this->UnitPriceNet = $UnitPriceNet;
      $this->UnitPriceGross = $UnitPriceGross;
      $this->UnitPriceTax = $UnitPriceTax;
      $this->TaxRate = $TaxRate;
      $this->LineAmountNet = $LineAmountNet;
      $this->LineAmountGross = $LineAmountGross;
      $this->LineAmountTax = $LineAmountTax;
    }

    /**
     * @return string
     */
    public function getLineNumber()
    {
      return $this->LineNumber;
    }

    /**
     * @param string $LineNumber
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setLineNumber($LineNumber)
    {
      $this->LineNumber = $LineNumber;
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
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
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
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setExternalItemId($ExternalItemId)
    {
      $this->ExternalItemId = $ExternalItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemBarcode()
    {
      return $this->ItemBarcode;
    }

    /**
     * @param string $ItemBarcode
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setItemBarcode($ItemBarcode)
    {
      $this->ItemBarcode = $ItemBarcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemName()
    {
      return $this->ItemName;
    }

    /**
     * @param string $ItemName
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setItemName($ItemName)
    {
      $this->ItemName = $ItemName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitId()
    {
      return $this->UnitId;
    }

    /**
     * @param string $UnitId
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setUnitId($UnitId)
    {
      $this->UnitId = $UnitId;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPriceNet()
    {
      return $this->UnitPriceNet;
    }

    /**
     * @param float $UnitPriceNet
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setUnitPriceNet($UnitPriceNet)
    {
      $this->UnitPriceNet = $UnitPriceNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPriceGross()
    {
      return $this->UnitPriceGross;
    }

    /**
     * @param float $UnitPriceGross
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setUnitPriceGross($UnitPriceGross)
    {
      $this->UnitPriceGross = $UnitPriceGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPriceTax()
    {
      return $this->UnitPriceTax;
    }

    /**
     * @param float $UnitPriceTax
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setUnitPriceTax($UnitPriceTax)
    {
      $this->UnitPriceTax = $UnitPriceTax;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
      return $this->TaxRate;
    }

    /**
     * @param float $TaxRate
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setTaxRate($TaxRate)
    {
      $this->TaxRate = $TaxRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getLineAmountNet()
    {
      return $this->LineAmountNet;
    }

    /**
     * @param float $LineAmountNet
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setLineAmountNet($LineAmountNet)
    {
      $this->LineAmountNet = $LineAmountNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getLineAmountGross()
    {
      return $this->LineAmountGross;
    }

    /**
     * @param float $LineAmountGross
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setLineAmountGross($LineAmountGross)
    {
      $this->LineAmountGross = $LineAmountGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getLineAmountTax()
    {
      return $this->LineAmountTax;
    }

    /**
     * @param float $LineAmountTax
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setLineAmountTax($LineAmountTax)
    {
      $this->LineAmountTax = $LineAmountTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalInvoiceId()
    {
      return $this->OriginalInvoiceId;
    }

    /**
     * @param string $OriginalInvoiceId
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setOriginalInvoiceId($OriginalInvoiceId)
    {
      $this->OriginalInvoiceId = $OriginalInvoiceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalLineNumber()
    {
      return $this->OriginalLineNumber;
    }

    /**
     * @param string $OriginalLineNumber
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setOriginalLineNumber($OriginalLineNumber)
    {
      $this->OriginalLineNumber = $OriginalLineNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackingSlipIdReference()
    {
      return $this->PackingSlipIdReference;
    }

    /**
     * @param string $PackingSlipIdReference
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setPackingSlipIdReference($PackingSlipIdReference)
    {
      $this->PackingSlipIdReference = $PackingSlipIdReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackingSlipLineNumberReference()
    {
      return $this->PackingSlipLineNumberReference;
    }

    /**
     * @param string $PackingSlipLineNumberReference
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setPackingSlipLineNumberReference($PackingSlipLineNumberReference)
    {
      $this->PackingSlipLineNumberReference = $PackingSlipLineNumberReference;
      return $this;
    }

    /**
     * @return LineAttributeType[]
     */
    public function getLineAttribute()
    {
      return $this->LineAttribute;
    }

    /**
     * @param LineAttributeType[] $LineAttribute
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setLineAttribute(array $LineAttribute = null)
    {
      $this->LineAttribute = $LineAttribute;
      return $this;
    }

    /**
     * @return OrderReferenceType
     */
    public function getOrderReference()
    {
      return $this->OrderReference;
    }

    /**
     * @param OrderReferenceType $OrderReference
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType
     */
    public function setOrderReference($OrderReference)
    {
      $this->OrderReference = $OrderReference;
      return $this;
    }

}
