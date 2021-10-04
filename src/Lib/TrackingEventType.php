<?php

namespace BPolNet\A\VendorApi\Lib;

class TrackingEventType
{

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $Timestamp
     */
    protected $Timestamp = null;

    /**
     * @var string $Performer
     */
    protected $Performer = null;

    /**
     * @var string $Terminal
     */
    protected $Terminal = null;

    /**
     * @param string $Status
     * @param \DateTime $Timestamp
     */
    public function __construct($Status, \DateTime $Timestamp)
    {
      $this->Status = $Status;
      $this->Timestamp = $Timestamp->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \BPolNet\A\VendorApi\Lib\TrackingEventType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->Timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Timestamp
     * @return \BPolNet\A\VendorApi\Lib\TrackingEventType
     */
    public function setTimestamp(\DateTime $Timestamp)
    {
      $this->Timestamp = $Timestamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getPerformer()
    {
      return $this->Performer;
    }

    /**
     * @param string $Performer
     * @return \BPolNet\A\VendorApi\Lib\TrackingEventType
     */
    public function setPerformer($Performer)
    {
      $this->Performer = $Performer;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminal()
    {
      return $this->Terminal;
    }

    /**
     * @param string $Terminal
     * @return \BPolNet\A\VendorApi\Lib\TrackingEventType
     */
    public function setTerminal($Terminal)
    {
      $this->Terminal = $Terminal;
      return $this;
    }

}
