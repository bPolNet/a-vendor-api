<?php

namespace BPolNet\A\VendorApi\Lib;

class PackingSlipType
{

    /**
     * @var string $ArrivalNoticeId
     */
    protected $ArrivalNoticeId = null;

    /**
     * @var string $PackingSlipId
     */
    protected $PackingSlipId = null;

    /**
     * @var string $PurchaseId
     */
    protected $PurchaseId = null;

    /**
     * @var string $VendorAccount
     */
    protected $VendorAccount = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $DeliveryMode
     */
    protected $DeliveryMode = null;

    /**
     * @var string $DeliveryName
     */
    protected $DeliveryName = null;

    /**
     * @var string $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var PackingSlipLineType[] $PackingSlipLine
     */
    protected $PackingSlipLine = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getArrivalNoticeId()
    {
      return $this->ArrivalNoticeId;
    }

    /**
     * @param string $ArrivalNoticeId
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipType
     */
    public function setArrivalNoticeId($ArrivalNoticeId)
    {
      $this->ArrivalNoticeId = $ArrivalNoticeId;
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
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipType
     */
    public function setPackingSlipId($PackingSlipId)
    {
      $this->PackingSlipId = $PackingSlipId;
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
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipType
     */
    public function setPurchaseId($PurchaseId)
    {
      $this->PurchaseId = $PurchaseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorAccount()
    {
      return $this->VendorAccount;
    }

    /**
     * @param string $VendorAccount
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipType
     */
    public function setVendorAccount($VendorAccount)
    {
      $this->VendorAccount = $VendorAccount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipType
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null)
    {
      if ($DeliveryDate == null) {
       $this->DeliveryDate = null;
      } else {
        $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryMode()
    {
      return $this->DeliveryMode;
    }

    /**
     * @param string $DeliveryMode
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipType
     */
    public function setDeliveryMode($DeliveryMode)
    {
      $this->DeliveryMode = $DeliveryMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryName()
    {
      return $this->DeliveryName;
    }

    /**
     * @param string $DeliveryName
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipType
     */
    public function setDeliveryName($DeliveryName)
    {
      $this->DeliveryName = $DeliveryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param string $DeliveryAddress
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipType
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return PackingSlipLineType[]
     */
    public function getPackingSlipLine()
    {
      return $this->PackingSlipLine;
    }

    /**
     * @param PackingSlipLineType[] $PackingSlipLine
     * @return \BPolNet\A\VendorApi\Lib\PackingSlipType
     */
    public function setPackingSlipLine(array $PackingSlipLine = null)
    {
      $this->PackingSlipLine = $PackingSlipLine;
      return $this;
    }

}
