<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusDetailsResponseBodyType
{

    /**
     * @var OrderStatusType $OrderStatus
     */
    protected $OrderStatus = null;

    /**
     * @param OrderStatusType $OrderStatus
     */
    public function __construct($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
    }

    /**
     * @return OrderStatusType
     */
    public function getOrderStatus()
    {
      return $this->OrderStatus;
    }

    /**
     * @param OrderStatusType $OrderStatus
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusDetailsResponseBodyType
     */
    public function setOrderStatus($OrderStatus)
    {
      $this->OrderStatus = $OrderStatus;
      return $this;
    }

}
