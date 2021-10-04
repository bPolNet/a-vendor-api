<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitShipmentStatusRequestBodyType
{

    /**
     * @var ShipmentStatus[] $ShipmentStatus
     */
    protected $ShipmentStatus = null;

    /**
     * @param ShipmentStatus[] $ShipmentStatus
     */
    public function __construct(array $ShipmentStatus)
    {
      $this->ShipmentStatus = $ShipmentStatus;
    }

    /**
     * @return ShipmentStatus[]
     */
    public function getShipmentStatus()
    {
      return $this->ShipmentStatus;
    }

    /**
     * @param ShipmentStatus[] $ShipmentStatus
     * @return \BPolNet\A\VendorApi\Lib\SubmitShipmentStatusRequestBodyType
     */
    public function setShipmentStatus(array $ShipmentStatus)
    {
      $this->ShipmentStatus = $ShipmentStatus;
      return $this;
    }

}
