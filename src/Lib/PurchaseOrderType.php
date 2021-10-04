<?php

namespace BPolNet\A\VendorApi\Lib;

class PurchaseOrderType
{

    /**
     * @var string $PurchaseId
     */
    protected $PurchaseId = null;

    /**
     * @var string $PurchaseInquiryStatus
     */
    protected $PurchaseInquiryStatus = null;

    /**
     * @var \DateTime $DocumentDate
     */
    protected $DocumentDate = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var \DateTime $ConfirmedDeliveryDate
     */
    protected $ConfirmedDeliveryDate = null;

    /**
     * @var string $PurchasePoolId
     */
    protected $PurchasePoolId = null;

    /**
     * @var string $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @var PurchaseInquiryLineGroupType[] $PurchaseInquiryLineGroup
     */
    protected $PurchaseInquiryLineGroup = null;

    /**
     * @param string $PurchaseId
     */
    public function __construct($PurchaseId)
    {
      $this->PurchaseId = $PurchaseId;
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
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderType
     */
    public function setPurchaseId($PurchaseId)
    {
      $this->PurchaseId = $PurchaseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseInquiryStatus()
    {
      return $this->PurchaseInquiryStatus;
    }

    /**
     * @param string $PurchaseInquiryStatus
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderType
     */
    public function setPurchaseInquiryStatus($PurchaseInquiryStatus)
    {
      $this->PurchaseInquiryStatus = $PurchaseInquiryStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDocumentDate()
    {
      if ($this->DocumentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DocumentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DocumentDate
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderType
     */
    public function setDocumentDate(\DateTime $DocumentDate = null)
    {
      if ($DocumentDate == null) {
       $this->DocumentDate = null;
      } else {
        $this->DocumentDate = $DocumentDate->format(\DateTime::ATOM);
      }
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
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderType
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
     * @return \DateTime
     */
    public function getConfirmedDeliveryDate()
    {
      if ($this->ConfirmedDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ConfirmedDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ConfirmedDeliveryDate
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderType
     */
    public function setConfirmedDeliveryDate(\DateTime $ConfirmedDeliveryDate = null)
    {
      if ($ConfirmedDeliveryDate == null) {
       $this->ConfirmedDeliveryDate = null;
      } else {
        $this->ConfirmedDeliveryDate = $ConfirmedDeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchasePoolId()
    {
      return $this->PurchasePoolId;
    }

    /**
     * @param string $PurchasePoolId
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderType
     */
    public function setPurchasePoolId($PurchasePoolId)
    {
      $this->PurchasePoolId = $PurchasePoolId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
      return $this->PaymentType;
    }

    /**
     * @param string $PaymentType
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderType
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

    /**
     * @return PurchaseInquiryLineGroupType[]
     */
    public function getPurchaseInquiryLineGroup()
    {
      return $this->PurchaseInquiryLineGroup;
    }

    /**
     * @param PurchaseInquiryLineGroupType[] $PurchaseInquiryLineGroup
     * @return \BPolNet\A\VendorApi\Lib\PurchaseOrderType
     */
    public function setPurchaseInquiryLineGroup(array $PurchaseInquiryLineGroup = null)
    {
      $this->PurchaseInquiryLineGroup = $PurchaseInquiryLineGroup;
      return $this;
    }

}
