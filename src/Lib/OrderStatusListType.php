<?php

namespace BPolNet\A\VendorApi\Lib;

class OrderStatusListType
{

    /**
     * @var OrderStatusType[] $OrderStatus
     */
    protected $OrderStatus = null;


    public function __construct()
    {

    }

    /**
     * @return OrderStatusType[]
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param OrderStatusType[] $OrderStatus
     * @return \BPolNet\A\VendorApi\Lib\OrderStatusListType
     */
    public function setOrderStatus(array $OrderStatus = null)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

}
