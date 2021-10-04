<?php

namespace BPolNet\A\VendorApi\Lib;

class ErrorReport
{

    /**
     * @var string $StackTrace
     */
    protected $StackTrace = null;

    /**
     * @var string $Msg
     */
    protected $Msg = null;

    /**
     * @var string $FullClass
     */
    protected $FullClass = null;

    /**
     * @var string $Class
     */
    protected $Class = null;

    /**
     * @var string $ProcessStack
     */
    protected $ProcessStack = null;

    /**
     * @var string $MsgCode
     */
    protected $MsgCode = null;

    /**
     * @var anydata $Data
     */
    protected $Data = null;

    /**
     * @param string $StackTrace
     * @param string $Msg
     * @param string $FullClass
     * @param string $Class
     * @param string $ProcessStack
     */
    public function __construct($StackTrace, $Msg, $FullClass, $Class, $ProcessStack)
    {
      $this->StackTrace = $StackTrace;
      $this->Msg = $Msg;
      $this->FullClass = $FullClass;
      $this->Class = $Class;
      $this->ProcessStack = $ProcessStack;
    }

    /**
     * @return string
     */
    public function getStackTrace()
    {
      return $this->StackTrace;
    }

    /**
     * @param string $StackTrace
     * @return \BPolNet\A\VendorApi\Lib\ErrorReport
     */
    public function setStackTrace($StackTrace)
    {
      $this->StackTrace = $StackTrace;
      return $this;
    }

    /**
     * @return string
     */
    public function getMsg()
    {
      return $this->Msg;
    }

    /**
     * @param string $Msg
     * @return \BPolNet\A\VendorApi\Lib\ErrorReport
     */
    public function setMsg($Msg)
    {
      $this->Msg = $Msg;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullClass()
    {
      return $this->FullClass;
    }

    /**
     * @param string $FullClass
     * @return \BPolNet\A\VendorApi\Lib\ErrorReport
     */
    public function setFullClass($FullClass)
    {
      $this->FullClass = $FullClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param string $Class
     * @return \BPolNet\A\VendorApi\Lib\ErrorReport
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

    /**
     * @return string
     */
    public function getProcessStack()
    {
      return $this->ProcessStack;
    }

    /**
     * @param string $ProcessStack
     * @return \BPolNet\A\VendorApi\Lib\ErrorReport
     */
    public function setProcessStack($ProcessStack)
    {
      $this->ProcessStack = $ProcessStack;
      return $this;
    }

    /**
     * @return string
     */
    public function getMsgCode()
    {
      return $this->MsgCode;
    }

    /**
     * @param string $MsgCode
     * @return \BPolNet\A\VendorApi\Lib\ErrorReport
     */
    public function setMsgCode($MsgCode)
    {
      $this->MsgCode = $MsgCode;
      return $this;
    }

    /**
     * @return anydata
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param anydata $Data
     * @return \BPolNet\A\VendorApi\Lib\ErrorReport
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

}
