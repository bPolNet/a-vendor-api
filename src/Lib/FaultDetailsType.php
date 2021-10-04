<?php

namespace BPolNet\A\VendorApi\Lib;

class FaultDetailsType
{

    /**
     * @var string $faultcode
     */
    protected $faultcode = null;

    /**
     * @var string $faultstring
     */
    protected $faultstring = null;

    /**
     * @var string $faulttype
     */
    protected $faulttype = null;

    /**
     * @var string $faultclass
     */
    protected $faultclass = null;

    /**
     * @var string $faultactor
     */
    protected $faultactor = null;

    /**
     * @var FaultSubdetailsType $detail
     */
    protected $detail = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getFaultcode()
    {
      return $this->faultcode;
    }

    /**
     * @param string $faultcode
     * @return \BPolNet\A\VendorApi\Lib\FaultDetailsType
     */
    public function setFaultcode($faultcode)
    {
      $this->faultcode = $faultcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaultstring()
    {
      return $this->faultstring;
    }

    /**
     * @param string $faultstring
     * @return \BPolNet\A\VendorApi\Lib\FaultDetailsType
     */
    public function setFaultstring($faultstring)
    {
      $this->faultstring = $faultstring;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaulttype()
    {
      return $this->faulttype;
    }

    /**
     * @param string $faulttype
     * @return \BPolNet\A\VendorApi\Lib\FaultDetailsType
     */
    public function setFaulttype($faulttype)
    {
      $this->faulttype = $faulttype;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaultclass()
    {
      return $this->faultclass;
    }

    /**
     * @param string $faultclass
     * @return \BPolNet\A\VendorApi\Lib\FaultDetailsType
     */
    public function setFaultclass($faultclass)
    {
      $this->faultclass = $faultclass;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaultactor()
    {
      return $this->faultactor;
    }

    /**
     * @param string $faultactor
     * @return \BPolNet\A\VendorApi\Lib\FaultDetailsType
     */
    public function setFaultactor($faultactor)
    {
      $this->faultactor = $faultactor;
      return $this;
    }

    /**
     * @return FaultSubdetailsType
     */
    public function getDetail()
    {
      return $this->detail;
    }

    /**
     * @param FaultSubdetailsType $detail
     * @return \BPolNet\A\VendorApi\Lib\FaultDetailsType
     */
    public function setDetail($detail)
    {
      $this->detail = $detail;
      return $this;
    }

}
