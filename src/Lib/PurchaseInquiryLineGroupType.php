<?php

namespace BPolNet\A\VendorApi\Lib;

class PurchaseInquiryLineGroupType
{

    /**
     * @var string $SalesId
     */
    protected $SalesId = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $StreetNumber
     */
    protected $StreetNumber = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $PackageNote
     */
    protected $PackageNote = null;

    /**
     * @var float $CODAmount
     */
    protected $CODAmount = null;

    /**
     * @var AttributeType[] $Attribute
     */
    protected $Attribute = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @var string $DeliveryName
     */
    protected $DeliveryName = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var string $ReceiptPointCode
     */
    protected $ReceiptPointCode = null;

    /**
     * @var string $DeliveryMode
     */
    protected $DeliveryMode = null;

    /**
     * @var string $DeliveryTerm
     */
    protected $DeliveryTerm = null;

    /**
     * @var PurchaseOrderLineType[] $PurchaseOrderLine
     */
    protected $PurchaseOrderLine = null;

    /**
     * @param PurchaseOrderLineType[] $PurchaseOrderLine
     */
    public function __construct(array $PurchaseOrderLine)
    {
      $this->PurchaseOrderLine = $PurchaseOrderLine;
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
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setSalesId($SalesId)
    {
      $this->SalesId = $SalesId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param string $Street
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
      return $this->StreetNumber;
    }

    /**
     * @param string $StreetNumber
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setStreetNumber($StreetNumber)
    {
      $this->StreetNumber = $StreetNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageNote()
    {
      return $this->PackageNote;
    }

    /**
     * @param string $PackageNote
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setPackageNote($PackageNote)
    {
      $this->PackageNote = $PackageNote;
      return $this;
    }

    /**
     * @return float
     */
    public function getCODAmount()
    {
      return $this->CODAmount;
    }

    /**
     * @param float $CODAmount
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setCODAmount($CODAmount)
    {
      $this->CODAmount = $CODAmount;
      return $this;
    }

    /**
     * @return AttributeType[]
     */
    public function getAttribute()
    {
      return $this->Attribute;
    }

    /**
     * @param AttributeType[] $Attribute
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setAttribute(array $Attribute = null)
    {
      $this->Attribute = $Attribute;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryName()
    {
      return $this->DeliveryName;
    }

    /**
     * @param string $DeliveryName
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setDeliveryName($DeliveryName)
    {
      $this->DeliveryName = $DeliveryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
      return $this->ContactName;
    }

    /**
     * @param string $ContactName
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setContactName($ContactName)
    {
      $this->ContactName = $ContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiptPointCode()
    {
      return $this->ReceiptPointCode;
    }

    /**
     * @param string $ReceiptPointCode
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setReceiptPointCode($ReceiptPointCode)
    {
      $this->ReceiptPointCode = $ReceiptPointCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryMode()
    {
      return $this->DeliveryMode;
    }

    /**
     * @param string $DeliveryMode
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setDeliveryMode($DeliveryMode)
    {
      $this->DeliveryMode = $DeliveryMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryTerm()
    {
      return $this->DeliveryTerm;
    }

    /**
     * @param string $DeliveryTerm
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setDeliveryTerm($DeliveryTerm)
    {
      $this->DeliveryTerm = $DeliveryTerm;
      return $this;
    }

    /**
     * @return PurchaseOrderLineType[]
     */
    public function getPurchaseOrderLine()
    {
      return $this->PurchaseOrderLine;
    }

    /**
     * @param PurchaseOrderLineType[] $PurchaseOrderLine
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInquiryLineGroupType
     */
    public function setPurchaseOrderLine(array $PurchaseOrderLine)
    {
      $this->PurchaseOrderLine = $PurchaseOrderLine;
      return $this;
    }

}
