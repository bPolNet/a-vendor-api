<?php

namespace BPolNet\A\VendorApi\Lib;

class ContainerContentType
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
     * @var string $PurchaseId
     */
    protected $PurchaseId = null;

    /**
     * @var string $PurchaseLineId
     */
    protected $PurchaseLineId = null;

    /**
     * @var string $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $UnitId
     */
    protected $UnitId = null;

    /**
     * @var LineAttributeType[] $LineAttribute
     */
    protected $LineAttribute = null;

    /**
     * @param string $ExternalItemId
     * @param string $ItemBarCode
     * @param string $PurchaseId
     * @param string $PurchaseLineId
     * @param string $Quantity
     * @param string $UnitId
     */
    public function __construct($ExternalItemId, $ItemBarCode, $PurchaseId, $PurchaseLineId, $Quantity, $UnitId)
    {
      $this->ExternalItemId = $ExternalItemId;
      $this->ItemBarCode = $ItemBarCode;
      $this->PurchaseId = $PurchaseId;
      $this->PurchaseLineId = $PurchaseLineId;
      $this->Quantity = $Quantity;
      $this->UnitId = $UnitId;
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerContentType
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerContentType
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerContentType
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerContentType
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerContentType
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerContentType
     */
    public function setPurchaseId($PurchaseId)
    {
      $this->PurchaseId = $PurchaseId;
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerContentType
     */
    public function setPurchaseLineId($PurchaseLineId)
    {
      $this->PurchaseLineId = $PurchaseLineId;
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerContentType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerContentType
     */
    public function setUnitId($UnitId)
    {
      $this->UnitId = $UnitId;
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
     * @return \BPolNet\A\VendorApi\Lib\ContainerContentType
     */
    public function setLineAttribute(array $LineAttribute = null)
    {
      $this->LineAttribute = $LineAttribute;
      return $this;
    }

}
