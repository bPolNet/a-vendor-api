<?php

namespace BPolNet\A\VendorApi\Lib;

class MessageTemplateType
{

    /**
     * @var MessageHeaderType $Header
     */
    protected $Header = null;

    /**
     * @param MessageHeaderType $Header
     */
    public function __construct($Header)
    {
      $this->Header = $Header;
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
     * @return \BPolNet\A\VendorApi\Lib\MessageTemplateType
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

}
