<?php

namespace BPolNet\A\VendorApi\Lib;

class OrderLineListGroupType
{

    /**
     * @var OrderLineGroupType[] $OrderLineGroup
     */
    protected $OrderLineGroup = null;


    public function __construct()
    {

    }

    /**
     * @return OrderLineGroupType[]
     */
    public function getOrderLineGroup()
    {
      return $this->OrderLineGroup;
    }

    /**
     * @param OrderLineGroupType[] $OrderLineGroup
     * @return \BPolNet\A\VendorApi\Lib\OrderLineListGroupType
     */
    public function setOrderLineGroup(array $OrderLineGroup = null)
    {
      $this->OrderLineGroup = $OrderLineGroup;
      return $this;
    }

}
