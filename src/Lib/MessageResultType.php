<?php

namespace BPolNet\A\VendorApi\Lib;

class MessageResultType
{

    /**
     * @var string $ResultCode
     */
    protected $ResultCode = null;

    /**
     * @var string $ResultMessage
     */
    protected $ResultMessage = null;

    /**
     * @var string[] $AdditionalMessages
     */
    protected $AdditionalMessages = null;

    /**
     * @var BusinessExceptionDetailsType $BusinessException
     */
    protected $BusinessException = null;

    /**
     * @param string $ResultCode
     * @param string $ResultMessage
     */
    public function __construct($ResultCode, $ResultMessage)
    {
      $this->ResultCode = $ResultCode;
      $this->ResultMessage = $ResultMessage;
    }

    /**
     * @return string
     */
    public function getResultCode()
    {
      return $this->ResultCode;
    }

    /**
     * @param string $ResultCode
     * @return \BPolNet\A\VendorApi\Lib\MessageResultType
     */
    public function setResultCode($ResultCode)
    {
      $this->ResultCode = $ResultCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getResultMessage()
    {
      return $this->ResultMessage;
    }

    /**
     * @param string $ResultMessage
     * @return \BPolNet\A\VendorApi\Lib\MessageResultType
     */
    public function setResultMessage($ResultMessage)
    {
      $this->ResultMessage = $ResultMessage;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAdditionalMessages()
    {
      return $this->AdditionalMessages;
    }

    /**
     * @param string[] $AdditionalMessages
     * @return \BPolNet\A\VendorApi\Lib\MessageResultType
     */
    public function setAdditionalMessages(array $AdditionalMessages = null)
    {
      $this->AdditionalMessages = $AdditionalMessages;
      return $this;
    }

    /**
     * @return BusinessExceptionDetailsType
     */
    public function getBusinessException()
    {
      return $this->BusinessException;
    }

    /**
     * @param BusinessExceptionDetailsType $BusinessException
     * @return \BPolNet\A\VendorApi\Lib\MessageResultType
     */
    public function setBusinessException($BusinessException)
    {
      $this->BusinessException = $BusinessException;
      return $this;
    }

}
