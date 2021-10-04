<?php

namespace BPolNet\A\VendorApi\Lib;

class BusinessExceptionDetailsType
{

    /**
     * @var URIType $Source
     */
    protected $Source = null;

    /**
     * @var string $BusinessArea
     */
    protected $BusinessArea = null;

    /**
     * @var string $BusinessProcess
     */
    protected $BusinessProcess = null;

    /**
     * @var anydata $DumpAnalysis
     */
    protected $DumpAnalysis = null;


    public function __construct()
    {

    }

    /**
     * @return URIType
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param URIType $Source
     * @return \BPolNet\A\VendorApi\Lib\BusinessExceptionDetailsType
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessArea()
    {
      return $this->BusinessArea;
    }

    /**
     * @param string $BusinessArea
     * @return \BPolNet\A\VendorApi\Lib\BusinessExceptionDetailsType
     */
    public function setBusinessArea($BusinessArea)
    {
      $this->BusinessArea = $BusinessArea;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessProcess()
    {
      return $this->BusinessProcess;
    }

    /**
     * @param string $BusinessProcess
     * @return \BPolNet\A\VendorApi\Lib\BusinessExceptionDetailsType
     */
    public function setBusinessProcess($BusinessProcess)
    {
      $this->BusinessProcess = $BusinessProcess;
      return $this;
    }

    /**
     * @return anydata
     */
    public function getDumpAnalysis()
    {
      return $this->DumpAnalysis;
    }

    /**
     * @param anydata $DumpAnalysis
     * @return \BPolNet\A\VendorApi\Lib\BusinessExceptionDetailsType
     */
    public function setDumpAnalysis($DumpAnalysis)
    {
      $this->DumpAnalysis = $DumpAnalysis;
      return $this;
    }

}
