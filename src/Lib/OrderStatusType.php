<?php

namespace BPolNet\A\VendorApi\Lib;

class OrderStatusType
{

    /**
     * @var string $VendorAccount
     */
    protected $VendorAccount = null;

    /**
     * @var string $PurchaseId
     */
    protected $PurchaseId = null;

    /**
     * @var \DateTime $DocumentDate
     */
    protected $DocumentDate = null;

    /**
     * @var \DateTime $RequestedDeliveryDate
     */
    protected $RequestedDeliveryDate = null;

    /**
     * @var string $OrderAccount
     */
    protected $OrderAccount = null;

    /**
     * @var string $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @var string $PurchaseInquiryStatus
     */
    protected $PurchaseInquiryStatus = null;

    /**
     * @var string $PurchasePoolId
     */
    protected $PurchasePoolId = null;

    /**
     * @var string $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @var InvoiceListType $InvoiceList
     */
    protected $InvoiceList = null;

    /**
     * @var ReceiptsListGroupType $ReceiptsListGroup
     */
    protected $ReceiptsListGroup = null;

    /**
     * @var OrderLineListGroupType $OrderLineListGroup
     */
    protected $OrderLineListGroup = null;


    public function __construct()
    {

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
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setVendorAccount($VendorAccount)
    {
      $this->VendorAccount = $VendorAccount;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setPurchaseId($PurchaseId)
    {
      $this->PurchaseId = $PurchaseId;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
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
    public function getRequestedDeliveryDate()
    {
      if ($this->RequestedDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RequestedDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RequestedDeliveryDate
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setRequestedDeliveryDate(\DateTime $RequestedDeliveryDate = null)
    {
      if ($RequestedDeliveryDate == null) {
       $this->RequestedDeliveryDate = null;
      } else {
        $this->RequestedDeliveryDate = $RequestedDeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderAccount()
    {
      return $this->OrderAccount;
    }

    /**
     * @param string $OrderAccount
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setOrderAccount($OrderAccount)
    {
      $this->OrderAccount = $OrderAccount;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setPurchaseInquiryStatus($PurchaseInquiryStatus)
    {
      $this->PurchaseInquiryStatus = $PurchaseInquiryStatus;
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
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setPurchasePoolId($PurchasePoolId)
    {
      $this->PurchasePoolId = $PurchasePoolId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param string $OrderStatus
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

    /**
     * @return InvoiceListType
     */
    public function getInvoiceList()
    {
      return $this->InvoiceList;
    }

    /**
     * @param InvoiceListType $InvoiceList
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setInvoiceList($InvoiceList)
    {
      $this->InvoiceList = $InvoiceList;
      return $this;
    }

    /**
     * @return ReceiptsListGroupType
     */
    public function getReceiptsListGroup()
    {
      return $this->ReceiptsListGroup;
    }

    /**
     * @param ReceiptsListGroupType $ReceiptsListGroup
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setReceiptsListGroup($ReceiptsListGroup)
    {
      $this->ReceiptsListGroup = $ReceiptsListGroup;
      return $this;
    }

    /**
     * @return OrderLineListGroupType
     */
    public function getOrderLineListGroup()
    {
      return $this->OrderLineListGroup;
    }

    /**
     * @param OrderLineListGroupType $OrderLineListGroup
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusType
     */
    public function setOrderLineListGroup($OrderLineListGroup)
    {
      $this->OrderLineListGroup = $OrderLineListGroup;
      return $this;
    }

}
