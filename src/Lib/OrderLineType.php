<?php

namespace BPolNet\A\VendorApi\Lib;

class OrderLineType
{

    /**
     * @var string $ItemId
     */
    protected $ItemId = null;

    /**
     * @var string $PurchaseLineId
     */
    protected $PurchaseLineId = null;

    /**
     * @var string $ExternalItemId
     */
    protected $ExternalItemId = null;

    /**
     * @var string $ItemBarCode
     */
    protected $ItemBarCode = null;

    /**
     * @var string $ItemName
     */
    protected $ItemName = null;

    /**
     * @var string $Unit
     */
    protected $Unit = null;

    /**
     * @var AttributeType[] $Attribute
     */
    protected $Attribute = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @param string $ExternalItemId
     */
    public function __construct($ExternalItemId)
    {
      $this->ExternalItemId = $ExternalItemId;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderLineType
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderLineType
     */
    public function setPurchaseLineId($PurchaseLineId)
    {
      $this->PurchaseLineId = $PurchaseLineId;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderLineType
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
     * @return \BPolNet\A\VendorApi\Lib\OrderLineType
     */
    public function setItemBarCode($ItemBarCode)
    {
      $this->ItemBarCode = $ItemBarCode;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderLineType
     */
    public function setItemName($ItemName)
    {
      $this->ItemName = $ItemName;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderLineType
     */
    public function setUnit($Unit)
    {
      $this->Unit = $Unit;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderLineType
     */
    public function setAttribute(array $Attribute = null)
    {
      $this->Attribute = $Attribute;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderLineType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderLineType
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

}
