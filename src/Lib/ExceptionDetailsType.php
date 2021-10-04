<?php

namespace BPolNet\A\VendorApi\Lib;

class ExceptionDetailsType
{

    /**
     * @var ErrorReport $ErrorReport
     */
    protected $ErrorReport = null;

    /**
     * @var FaultDetailsType $FaultDetails
     */
    protected $FaultDetails = null;

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var ErrorTypeType $ErrorType
     */
    protected $ErrorType = null;

    /**
     * @var ErrorClassType $ErrorClass
     */
    protected $ErrorClass = null;

    /**
     * @var ErrorHandlingType $ErrorHandling
     */
    protected $ErrorHandling = null;

    /**
     * @param string $ErrorCode
     * @param string $ErrorMessage
     * @param ErrorTypeType $ErrorType
     * @param ErrorClassType $ErrorClass
     */
    public function __construct($ErrorCode, $ErrorMessage, $ErrorType, $ErrorClass)
    {
      $this->ErrorCode = $ErrorCode;
      $this->ErrorMessage = $ErrorMessage;
      $this->ErrorType = $ErrorType;
      $this->ErrorClass = $ErrorClass;
    }

    /**
     * @return ErrorReport
     */
    public function getErrorReport()
    {
      return $this->ErrorReport;
    }

    /**
     * @param ErrorReport $ErrorReport
     * @return \BPolNet\A\VendorApi\Lib\ExceptionDetailsType
     */
    public function setErrorReport($ErrorReport)
    {
      $this->ErrorReport = $ErrorReport;
      return $this;
    }

    /**
     * @return FaultDetailsType
     */
    public function getFaultDetails()
    {
      return $this->FaultDetails;
    }

    /**
     * @param FaultDetailsType $FaultDetails
     * @return \BPolNet\A\VendorApi\Lib\ExceptionDetailsType
     */
    public function setFaultDetails($FaultDetails)
    {
      $this->FaultDetails = $FaultDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \BPolNet\A\VendorApi\Lib\ExceptionDetailsType
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \BPolNet\A\VendorApi\Lib\ExceptionDetailsType
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return ErrorTypeType
     */
    public function getErrorType()
    {
      return $this->ErrorType;
    }

    /**
     * @param ErrorTypeType $ErrorType
     * @return \BPolNet\A\VendorApi\Lib\ExceptionDetailsType
     */
    public function setErrorType($ErrorType)
    {
      $this->ErrorType = $ErrorType;
      return $this;
    }

    /**
     * @return ErrorClassType
     */
    public function getErrorClass()
    {
      return $this->ErrorClass;
    }

    /**
     * @param ErrorClassType $ErrorClass
     * @return \BPolNet\A\VendorApi\Lib\ExceptionDetailsType
     */
    public function setErrorClass($ErrorClass)
    {
      $this->ErrorClass = $ErrorClass;
      return $this;
    }

    /**
     * @return ErrorHandlingType
     */
    public function getErrorHandling()
    {
      return $this->ErrorHandling;
    }

    /**
     * @param ErrorHandlingType $ErrorHandling
     * @return \BPolNet\A\VendorApi\Lib\ExceptionDetailsType
     */
    public function setErrorHandling($ErrorHandling)
    {
      $this->ErrorHandling = $ErrorHandling;
      return $this;
    }

}
