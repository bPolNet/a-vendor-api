<?php

namespace BPolNet\A\VendorApi\Lib;

class ShipmentContentType
{

    /**
     * @var string $ItemId
     */
    protected $ItemId = null;

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
     * @var string $Notes
     */
    protected $Notes = null;

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
     * @param string $ExternalItemId
     * @param float $Quantity
     */
    public function __construct($ExternalItemId, $Quantity)
    {
      $this->ExternalItemId = $ExternalItemId;
      $this->Quantity = $Quantity;
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
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContentType
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
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContentType
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
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContentType
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
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContentType
     */
    public function setItemName($ItemName)
    {
      $this->ItemName = $ItemName;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContentType
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
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
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContentType
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
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContentType
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
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContentType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
