<?php

namespace BPolNet\A\VendorApi\Lib;

class ArrivalNoticeType
{

    /**
     * @var string $DocumentId
     */
    protected $DocumentId = null;

    /**
     * @var \DateTime $ETAFrom
     */
    protected $ETAFrom = null;

    /**
     * @var \DateTime $ETATo
     */
    protected $ETATo = null;

    /**
     * @var string $CarrierId
     */
    protected $CarrierId = null;

    /**
     * @var string $CarrierName
     */
    protected $CarrierName = null;

    /**
     * @var string $DriverContact
     */
    protected $DriverContact = null;

    /**
     * @var string $DriverName
     */
    protected $DriverName = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var ContainerType[] $Container
     */
    protected $Container = null;

    /**
     * @var string $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var PackageType[] $Package
     */
    protected $Package = null;

    /**
     * @var string $SealNumber
     */
    protected $SealNumber = null;

    /**
     * @var string $TrailerRegistrationPlate
     */
    protected $TrailerRegistrationPlate = null;

    /**
     * @var string $TruckRegistrationPlate
     */
    protected $TruckRegistrationPlate = null;

    /**
     * @param \DateTime $ETAFrom
     * @param \DateTime $ETATo
     * @param ContainerType[] $Container
     */
    public function __construct(\DateTime $ETAFrom, \DateTime $ETATo, array $Container)
    {
      $this->ETAFrom = $ETAFrom->format(\DateTime::ATOM);
      $this->ETATo = $ETATo->format(\DateTime::ATOM);
      $this->Container = $Container;
    }

    /**
     * @return string
     */
    public function getDocumentId()
    {
      return $this->DocumentId;
    }

    /**
     * @param string $DocumentId
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setDocumentId($DocumentId)
    {
      $this->DocumentId = $DocumentId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getETAFrom()
    {
      if ($this->ETAFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ETAFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ETAFrom
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setETAFrom(\DateTime $ETAFrom)
    {
      $this->ETAFrom = $ETAFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getETATo()
    {
      if ($this->ETATo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ETATo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ETATo
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setETATo(\DateTime $ETATo)
    {
      $this->ETATo = $ETATo->format(\DateTime::ATOM);
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
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setCarrierId($CarrierId)
    {
      $this->CarrierId = $CarrierId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierName()
    {
      return $this->CarrierName;
    }

    /**
     * @param string $CarrierName
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setCarrierName($CarrierName)
    {
      $this->CarrierName = $CarrierName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDriverContact()
    {
      return $this->DriverContact;
    }

    /**
     * @param string $DriverContact
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setDriverContact($DriverContact)
    {
      $this->DriverContact = $DriverContact;
      return $this;
    }

    /**
     * @return string
     */
    public function getDriverName()
    {
      return $this->DriverName;
    }

    /**
     * @param string $DriverName
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setDriverName($DriverName)
    {
      $this->DriverName = $DriverName;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return ContainerType[]
     */
    public function getContainer()
    {
      return $this->Container;
    }

    /**
     * @param ContainerType[] $Container
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setContainer(array $Container)
    {
      $this->Container = $Container;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param string $DeliveryAddress
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return PackageType[]
     */
    public function getPackage()
    {
      return $this->Package;
    }

    /**
     * @param PackageType[] $Package
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setPackage(array $Package = null)
    {
      $this->Package = $Package;
      return $this;
    }

    /**
     * @return string
     */
    public function getSealNumber()
    {
      return $this->SealNumber;
    }

    /**
     * @param string $SealNumber
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setSealNumber($SealNumber)
    {
      $this->SealNumber = $SealNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrailerRegistrationPlate()
    {
      return $this->TrailerRegistrationPlate;
    }

    /**
     * @param string $TrailerRegistrationPlate
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setTrailerRegistrationPlate($TrailerRegistrationPlate)
    {
      $this->TrailerRegistrationPlate = $TrailerRegistrationPlate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTruckRegistrationPlate()
    {
      return $this->TruckRegistrationPlate;
    }

    /**
     * @param string $TruckRegistrationPlate
     * @return \BPolNet\A\VendorApi\Lib\ArrivalNoticeType
     */
    public function setTruckRegistrationPlate($TruckRegistrationPlate)
    {
      $this->TruckRegistrationPlate = $TruckRegistrationPlate;
      return $this;
    }

}
