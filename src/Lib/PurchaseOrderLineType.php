<?php

namespace BPolNet\A\VendorApi\Lib;

class PurchaseOrderLineType
{

    /**
     * @var string $PurchaseLineId
     */
    protected $PurchaseLineId = null;

    /**
     * @var string $ItemId
     */
    protected $ItemId = null;

    /**
     * @var string $ExternalItemId
     */
    protected $ExternalItemId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var string $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $Unit
     */
    protected $Unit = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var AttributeType[] $Attribute
     */
    protected $Attribute = null;

    /**
     * @param string $PurchaseLineId
     * @param string $ItemId
     * @param string $ExternalItemId
     * @param float $Price
     * @param string $Quantity
     * @param string $Unit
     * @param string $Barcode
     */
    public function __construct($PurchaseLineId, $ItemId, $ExternalItemId, $Price, $Quantity, $Unit, $Barcode)
    {
      $this->PurchaseLineId = $PurchaseLineId;
      $this->ItemId = $ItemId;
      $this->ExternalItemId = $ExternalItemId;
      $this->Price = $Price;
      $this->Quantity = $Quantity;
      $this->Unit = $Unit;
      $this->Barcode = $Barcode;
    }

    /**
     * @return string
     */
    public function getPurchaseLineId()
    {
      return $this->PurchaseLineId;
    }

    /**
     * @param string $PurchaseLineId
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderLineType
     */
    public function setPurchaseLineId($PurchaseLineId)
    {
      $this->PurchaseLineId = $PurchaseLineId;
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
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderLineType
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
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderLineType
     */
    public function setExternalItemId($ExternalItemId)
    {
      $this->ExternalItemId = $ExternalItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderLineType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderLineType
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param string $Quantity
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderLineType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
      return $this->Unit;
    }

    /**
     * @param string $Unit
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderLineType
     */
    public function setUnit($Unit)
    {
      $this->Unit = $Unit;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
      return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderLineType
     */
    public function setBarcode($Barcode)
    {
      $this->Barcode = $Barcode;
      return $this;
    }

    /**
     * @return AttributeType[]
     */
    public function getAttribute()
    {
      return $this->Attribute;
    }

    /**
     * @param AttributeType[] $Attribute
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderLineType
     */
    public function setAttribute(array $Attribute = null)
    {
      $this->Attribute = $Attribute;
      return $this;
    }

}
