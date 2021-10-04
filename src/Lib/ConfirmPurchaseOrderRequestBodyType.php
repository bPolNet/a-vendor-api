<?php

namespace BPolNet\A\VendorApi\Lib;

class ConfirmPurchaseOrderRequestBodyType
{

    /**
     * @var string $PurchaseOrderId
     */
    protected $PurchaseOrderId = null;

    /**
     * @var \DateTime $ConfirmedDeliveryDate
     */
    protected $ConfirmedDeliveryDate = null;

    /**
     * @var PurchaseOrderType $PurchaseOrder
     */
    protected $PurchaseOrder = null;

    /**
     * @param string $PurchaseOrderId
     * @param \DateTime $ConfirmedDeliveryDate
     */
    public function __construct($PurchaseOrderId, \DateTime $ConfirmedDeliveryDate)
    {
      $this->PurchaseOrderId = $PurchaseOrderId;
      $this->ConfirmedDeliveryDate = $ConfirmedDeliveryDate->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getPurchaseOrderId()
    {
      return $this->PurchaseOrderId;
    }

    /**
     * @param string $PurchaseOrderId
     * @return \BPolNet\A\VendorApi\Lib\ConfirmPurchaseOrderRequestBodyType
     */
    public function setPurchaseOrderId($PurchaseOrderId)
    {
      $this->PurchaseOrderId = $PurchaseOrderId;
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
     * @return \BPolNet\A\VendorApi\Lib\ConfirmPurchaseOrderRequestBodyType
     */
    public function setConfirmedDeliveryDate(\DateTime $ConfirmedDeliveryDate)
    {
      $this->ConfirmedDeliveryDate = $ConfirmedDeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PurchaseOrderType
     */
    public function getPurchaseOrder()
    {
      return $this->PurchaseOrder;
    }

    /**
     * @param PurchaseOrderType $PurchaseOrder
     * @return \BPolNet\A\VendorApi\Lib\ConfirmPurchaseOrderRequestBodyType
     */
    public function setPurchaseOrder($PurchaseOrder)
    {
      $this->PurchaseOrder = $PurchaseOrder;
      return $this;
    }

}
