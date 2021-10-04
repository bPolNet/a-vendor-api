<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusResponseBodyType
{

    /**
     * @var OrderStatusListType $OrderStatusList
     */
    protected $OrderStatusList = null;

    /**
     * @param OrderStatusListType $OrderStatusList
     */
    public function __construct($OrderStatusList)
    {
      $this->OrderStatusList = $OrderStatusList;
    }

    /**
     * @return OrderStatusListType
     */
    public function getOrderStatusList()
    {
      return $this->OrderStatusList;
    }

    /**
     * @param OrderStatusListType $OrderStatusList
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusResponseBodyType
     */
    public function setOrderStatusList($OrderStatusList)
    {
      $this->OrderStatusList = $OrderStatusList;
      return $this;
    }

}
