<?php

namespace BPolNet\A\VendorApi\Lib;

class PackingSlipLineType
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
     * @var string $ItemName
     */
    protected $ItemName = null;

    /**
     * @var string $ItemBarCode
     */
    protected $ItemBarCode = null;

    /**
     * @var string $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $UnitId
     */
    protected $UnitId = null;

    /**
     * @var string $OriginalPurchaseId
     */
    protected $OriginalPurchaseId = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    
    public function __construct()
    {
    
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
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipLineType
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
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipLineType
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
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipLineType
     */
    public function setExternalItemId($ExternalItemId)
    {
      $this->ExternalItemId = $ExternalItemId;
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
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipLineType
     */
    public function setItemName($ItemName)
    {
      $this->ItemName = $ItemName;
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
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipLineType
     */
    public function setItemBarCode($ItemBarCode)
    {
      $this->ItemBarCode = $ItemBarCode;
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
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipLineType
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
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipLineType
     */
    public function setUnitId($UnitId)
    {
      $this->UnitId = $UnitId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalPurchaseId()
    {
      return $this->OriginalPurchaseId;
    }

    /**
     * @param string $OriginalPurchaseId
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipLineType
     */
    public function setOriginalPurchaseId($OriginalPurchaseId)
    {
      $this->OriginalPurchaseId = $OriginalPurchaseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipLineType
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

}
