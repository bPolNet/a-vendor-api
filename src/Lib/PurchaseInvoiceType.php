<?php

namespace BPolNet\A\VendorApi\Lib;

class PurchaseInvoiceType
{

    /**
     * @var string $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var string $PaymentDate
     */
    protected $PaymentDate = null;

    /**
     * @var string $PaymentTerm
     */
    protected $PaymentTerm = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var float $ExchRate
     */
    protected $ExchRate = null;

    /**
     * @var string $BuyerAddressCity
     */
    protected $BuyerAddressCity = null;

    /**
     * @var string $BuyerAddressStreet
     */
    protected $BuyerAddressStreet = null;

    /**
     * @var string $BuyerAddressZipCode
     */
    protected $BuyerAddressZipCode = null;

    /**
     * @var string $BuyerName
     */
    protected $BuyerName = null;

    /**
     * @var string $BuyerTaxId
     */
    protected $BuyerTaxId = null;

    /**
     * @var string $SellerAddressCity
     */
    protected $SellerAddressCity = null;

    /**
     * @var string $SellerAddressStreet
     */
    protected $SellerAddressStreet = null;

    /**
     * @var string $SellerAddressZipCode
     */
    protected $SellerAddressZipCode = null;

    /**
     * @var string $SellerName
     */
    protected $SellerName = null;

    /**
     * @var string $SellerTaxId
     */
    protected $SellerTaxId = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var OrderReferenceType $OrderReference
     */
    protected $OrderReference = null;

    /**
     * @var float $TotalInvoiceGross
     */
    protected $TotalInvoiceGross = null;

    /**
     * @var float $TotalInvoiceNet
     */
    protected $TotalInvoiceNet = null;

    /**
     * @var float $TotalInvoiceTax
     */
    protected $TotalInvoiceTax = null;

    /**
     * @var CreditNoteReferenceType[] $CreditNoteReference
     */
    protected $CreditNoteReference = null;

    /**
     * @var PurchaseInvoiceLineType[] $InvoiceLine
     */
    protected $InvoiceLine = null;

    /**
     * @param string $InvoiceId
     * @param string $InvoiceDate
     * @param string $PaymentDate
     * @param string $PaymentTerm
     * @param string $BuyerAddressCity
     * @param string $BuyerAddressStreet
     * @param string $BuyerAddressZipCode
     * @param string $BuyerName
     * @param string $BuyerTaxId
     * @param string $SellerAddressCity
     * @param string $SellerAddressStreet
     * @param string $SellerAddressZipCode
     * @param string $SellerName
     * @param string $SellerTaxId
     * @param float $TotalInvoiceGross
     * @param float $TotalInvoiceNet
     * @param float $TotalInvoiceTax
     * @param PurchaseInvoiceLineType[] $InvoiceLine
     */
    public function __construct($InvoiceId, $InvoiceDate, $PaymentDate, $PaymentTerm, $BuyerAddressCity, $BuyerAddressStreet, $BuyerAddressZipCode, $BuyerName, $BuyerTaxId, $SellerAddressCity, $SellerAddressStreet, $SellerAddressZipCode, $SellerName, $SellerTaxId, $TotalInvoiceGross, $TotalInvoiceNet, $TotalInvoiceTax, array $InvoiceLine)
    {
      $this->InvoiceId = $InvoiceId;
      $this->InvoiceDate = $InvoiceDate;
      $this->PaymentDate = $PaymentDate;
      $this->PaymentTerm = $PaymentTerm;
      $this->BuyerAddressCity = $BuyerAddressCity;
      $this->BuyerAddressStreet = $BuyerAddressStreet;
      $this->BuyerAddressZipCode = $BuyerAddressZipCode;
      $this->BuyerName = $BuyerName;
      $this->BuyerTaxId = $BuyerTaxId;
      $this->SellerAddressCity = $SellerAddressCity;
      $this->SellerAddressStreet = $SellerAddressStreet;
      $this->SellerAddressZipCode = $SellerAddressZipCode;
      $this->SellerName = $SellerName;
      $this->SellerTaxId = $SellerTaxId;
      $this->TotalInvoiceGross = $TotalInvoiceGross;
      $this->TotalInvoiceNet = $TotalInvoiceNet;
      $this->TotalInvoiceTax = $TotalInvoiceTax;
      $this->InvoiceLine = $InvoiceLine;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
      return $this->InvoiceId;
    }

    /**
     * @param string $InvoiceId
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
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
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDate()
    {
      return $this->InvoiceDate;
    }

    /**
     * @param string $InvoiceDate
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setInvoiceDate($InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentDate()
    {
      return $this->PaymentDate;
    }

    /**
     * @param string $PaymentDate
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setPaymentDate($PaymentDate)
    {
      $this->PaymentDate = $PaymentDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentTerm()
    {
      return $this->PaymentTerm;
    }

    /**
     * @param string $PaymentTerm
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setPaymentTerm($PaymentTerm)
    {
      $this->PaymentTerm = $PaymentTerm;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getExchRate()
    {
      return $this->ExchRate;
    }

    /**
     * @param float $ExchRate
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setExchRate($ExchRate)
    {
      $this->ExchRate = $ExchRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerAddressCity()
    {
      return $this->BuyerAddressCity;
    }

    /**
     * @param string $BuyerAddressCity
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setBuyerAddressCity($BuyerAddressCity)
    {
      $this->BuyerAddressCity = $BuyerAddressCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerAddressStreet()
    {
      return $this->BuyerAddressStreet;
    }

    /**
     * @param string $BuyerAddressStreet
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setBuyerAddressStreet($BuyerAddressStreet)
    {
      $this->BuyerAddressStreet = $BuyerAddressStreet;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerAddressZipCode()
    {
      return $this->BuyerAddressZipCode;
    }

    /**
     * @param string $BuyerAddressZipCode
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setBuyerAddressZipCode($BuyerAddressZipCode)
    {
      $this->BuyerAddressZipCode = $BuyerAddressZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerName()
    {
      return $this->BuyerName;
    }

    /**
     * @param string $BuyerName
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setBuyerName($BuyerName)
    {
      $this->BuyerName = $BuyerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerTaxId()
    {
      return $this->BuyerTaxId;
    }

    /**
     * @param string $BuyerTaxId
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setBuyerTaxId($BuyerTaxId)
    {
      $this->BuyerTaxId = $BuyerTaxId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerAddressCity()
    {
      return $this->SellerAddressCity;
    }

    /**
     * @param string $SellerAddressCity
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setSellerAddressCity($SellerAddressCity)
    {
      $this->SellerAddressCity = $SellerAddressCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerAddressStreet()
    {
      return $this->SellerAddressStreet;
    }

    /**
     * @param string $SellerAddressStreet
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setSellerAddressStreet($SellerAddressStreet)
    {
      $this->SellerAddressStreet = $SellerAddressStreet;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerAddressZipCode()
    {
      return $this->SellerAddressZipCode;
    }

    /**
     * @param string $SellerAddressZipCode
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setSellerAddressZipCode($SellerAddressZipCode)
    {
      $this->SellerAddressZipCode = $SellerAddressZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerName()
    {
      return $this->SellerName;
    }

    /**
     * @param string $SellerName
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setSellerName($SellerName)
    {
      $this->SellerName = $SellerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerTaxId()
    {
      return $this->SellerTaxId;
    }

    /**
     * @param string $SellerTaxId
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setSellerTaxId($SellerTaxId)
    {
      $this->SellerTaxId = $SellerTaxId;
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
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return OrderReferenceType
     */
    public function getOrderReference()
    {
      return $this->OrderReference;
    }

    /**
     * @param OrderReferenceType $OrderReference
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setOrderReference($OrderReference)
    {
      $this->OrderReference = $OrderReference;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalInvoiceGross()
    {
      return $this->TotalInvoiceGross;
    }

    /**
     * @param float $TotalInvoiceGross
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setTotalInvoiceGross($TotalInvoiceGross)
    {
      $this->TotalInvoiceGross = $TotalInvoiceGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalInvoiceNet()
    {
      return $this->TotalInvoiceNet;
    }

    /**
     * @param float $TotalInvoiceNet
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setTotalInvoiceNet($TotalInvoiceNet)
    {
      $this->TotalInvoiceNet = $TotalInvoiceNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalInvoiceTax()
    {
      return $this->TotalInvoiceTax;
    }

    /**
     * @param float $TotalInvoiceTax
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setTotalInvoiceTax($TotalInvoiceTax)
    {
      $this->TotalInvoiceTax = $TotalInvoiceTax;
      return $this;
    }

    /**
     * @return CreditNoteReferenceType[]
     */
    public function getCreditNoteReference()
    {
      return $this->CreditNoteReference;
    }

    /**
     * @param CreditNoteReferenceType[] $CreditNoteReference
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setCreditNoteReference(array $CreditNoteReference = null)
    {
      $this->CreditNoteReference = $CreditNoteReference;
      return $this;
    }

    /**
     * @return PurchaseInvoiceLineType[]
     */
    public function getInvoiceLine()
    {
      return $this->InvoiceLine;
    }

    /**
     * @param PurchaseInvoiceLineType[] $InvoiceLine
     * @return \BPolNet\A\VendorApi\Lib\PurchaseInvoiceType
     */
    public function setInvoiceLine(array $InvoiceLine)
    {
      $this->InvoiceLine = $InvoiceLine;
      return $this;
    }

}
