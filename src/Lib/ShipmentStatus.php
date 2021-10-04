<?php

namespace BPolNet\A\VendorApi\Lib;

class ShipmentStatus
{

    /**
     * @var string $PurchaseId
     */
    protected $PurchaseId = null;

    /**
     * @var string $SalesId
     */
    protected $SalesId = null;

    /**
     * @var string $VendorOrderId
     */
    protected $VendorOrderId = null;

    /**
     * @var ShipmentContainerType $Container
     */
    protected $Container = null;

    /**
     * @param string $PurchaseId
     * @param string $SalesId
     * @param string $VendorOrderId
     * @param ShipmentContainerType $Container
     */
    public function __construct($PurchaseId, $SalesId, $VendorOrderId, $Container)
    {
      $this->PurchaseId = $PurchaseId;
      $this->SalesId = $SalesId;
      $this->VendorOrderId = $VendorOrderId;
      $this->Container = $Container;
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
     * @return \BPolNet\A\VendorApi\Lib\ShipmentStatus
     */
    public function setPurchaseId($PurchaseId)
    {
      $this->PurchaseId = $PurchaseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesId()
    {
      return $this->SalesId;
    }

    /**
     * @param string $SalesId
     * @return \BPolNet\A\VendorApi\Lib\ShipmentStatus
     */
    public function setSalesId($SalesId)
    {
      $this->SalesId = $SalesId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorOrderId()
    {
      return $this->VendorOrderId;
    }

    /**
     * @param string $VendorOrderId
     * @return \BPolNet\A\VendorApi\Lib\ShipmentStatus
     */
    public function setVendorOrderId($VendorOrderId)
    {
      $this->VendorOrderId = $VendorOrderId;
      return $this;
    }

    /**
     * @return ShipmentContainerType
     */
    public function getContainer()
    {
      return $this->Container;
    }

    /**
     * @param ShipmentContainerType $Container
     * @return \BPolNet\A\VendorApi\Lib\ShipmentStatus
     */
    public function setContainer($Container)
    {
      $this->Container = $Container;
      return $this;
    }

}
