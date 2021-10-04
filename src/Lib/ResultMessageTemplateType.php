<?php

namespace BPolNet\A\VendorApi\Lib;

class ResultMessageTemplateType
{

    /**
     * @var MessageHeaderType $Header
     */
    protected $Header = null;

    /**
     * @var MessageResultType $Result
     */
    protected $Result = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     */
    public function __construct($Header, $Result)
    {
      $this->Header = $Header;
      $this->Result = $Result;
    }

    /**
     * @return MessageHeaderType
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param MessageHeaderType $Header
     * @return \BPolNet\A\VendorApi\Lib\ResultMessageTemplateType
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return MessageResultType
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param MessageResultType $Result
     * @return \BPolNet\A\VendorApi\Lib\ResultMessageTemplateType
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

}
