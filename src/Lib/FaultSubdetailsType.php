<?php

namespace BPolNet\A\VendorApi\Lib;

class FaultSubdetailsType
{

    /**
     * @var string $faultdata
     */
    protected $faultdata = null;

    /**
     * @var string $faultprocess
     */
    protected $faultprocess = null;

    /**
     * @var string $faultcomponent
     */
    protected $faultcomponent = null;

    /**
     * @var string $faultflowpath
     */
    protected $faultflowpath = null;

    /**
     * @var anydata $subdetails
     */
    protected $subdetails = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getFaultdata()
    {
      return $this->faultdata;
    }

    /**
     * @param string $faultdata
     * @return \BPolNet\A\VendorApi\Lib\FaultSubdetailsType
     */
    public function setFaultdata($faultdata)
    {
      $this->faultdata = $faultdata;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaultprocess()
    {
      return $this->faultprocess;
    }

    /**
     * @param string $faultprocess
     * @return \BPolNet\A\VendorApi\Lib\FaultSubdetailsType
     */
    public function setFaultprocess($faultprocess)
    {
      $this->faultprocess = $faultprocess;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaultcomponent()
    {
      return $this->faultcomponent;
    }

    /**
     * @param string $faultcomponent
     * @return \BPolNet\A\VendorApi\Lib\FaultSubdetailsType
     */
    public function setFaultcomponent($faultcomponent)
    {
      $this->faultcomponent = $faultcomponent;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaultflowpath()
    {
      return $this->faultflowpath;
    }

    /**
     * @param string $faultflowpath
     * @return \BPolNet\A\VendorApi\Lib\FaultSubdetailsType
     */
    public function setFaultflowpath($faultflowpath)
    {
      $this->faultflowpath = $faultflowpath;
      return $this;
    }

    /**
     * @return anydata
     */
    public function getSubdetails()
    {
      return $this->subdetails;
    }

    /**
     * @param anydata $subdetails
     * @return \BPolNet\A\VendorApi\Lib\FaultSubdetailsType
     */
    public function setSubdetails($subdetails)
    {
      $this->subdetails = $subdetails;
      return $this;
    }

}
