<?php

namespace BPolNet\A\VendorApi\Lib;

class ShipmentContainerType
{

    /**
     * @var string $ContainerId
     */
    protected $ContainerId = null;

    /**
     * @var string $CarrierId
     */
    protected $CarrierId = null;

    /**
     * @var string $CarrierTrackingNumber
     */
    protected $CarrierTrackingNumber = null;

    /**
     * @var ShipmentContentType[] $Content
     */
    protected $Content = null;

    /**
     * @var TrackingEventType[] $TrackingEvent
     */
    protected $TrackingEvent = null;

    /**
     * @param string $CarrierId
     * @param string $CarrierTrackingNumber
     * @param TrackingEventType[] $TrackingEvent
     */
    public function __construct($CarrierId, $CarrierTrackingNumber, array $TrackingEvent)
    {
      $this->CarrierId = $CarrierId;
      $this->CarrierTrackingNumber = $CarrierTrackingNumber;
      $this->TrackingEvent = $TrackingEvent;
    }

    /**
     * @return string
     */
    public function getContainerId()
    {
      return $this->ContainerId;
    }

    /**
     * @param string $ContainerId
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContainerType
     */
    public function setContainerId($ContainerId)
    {
      $this->ContainerId = $ContainerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierId()
    {
      return $this->CarrierId;
    }

    /**
     * @param string $CarrierId
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContainerType
     */
    public function setCarrierId($CarrierId)
    {
      $this->CarrierId = $CarrierId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierTrackingNumber()
    {
      return $this->CarrierTrackingNumber;
    }

    /**
     * @param string $CarrierTrackingNumber
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContainerType
     */
    public function setCarrierTrackingNumber($CarrierTrackingNumber)
    {
      $this->CarrierTrackingNumber = $CarrierTrackingNumber;
      return $this;
    }

    /**
     * @return ShipmentContentType[]
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ShipmentContentType[] $Content
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContainerType
     */
    public function setContent(array $Content = null)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return TrackingEventType[]
     */
    public function getTrackingEvent()
    {
      return $this->TrackingEvent;
    }

    /**
     * @param TrackingEventType[] $TrackingEvent
     * @return \BPolNet\A\VendorApi\Lib\ShipmentContainerType
     */
    public function setTrackingEvent(array $TrackingEvent)
    {
      $this->TrackingEvent = $TrackingEvent;
      return $this;
    }

}
