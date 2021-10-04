<?php

namespace BPolNet\A\VendorApi\Lib;

class MessageHeaderType
{

    /**
     * @var URIType $OriginatorURI
     */
    protected $OriginatorURI = null;

    /**
     * @var \DateTime $Timestamp
     */
    protected $Timestamp = null;

    /**
     * @var ActivityNameType $ActivityName
     */
    protected $ActivityName = null;

    /**
     * @var ActivityStatusType $ActivityStatus
     */
    protected $ActivityStatus = null;

    /**
     * @var TransactionIdType $CorrelationId
     */
    protected $CorrelationId = null;

    /**
     * @var URIType $DestinationURI
     */
    protected $DestinationURI = null;

    /**
     * @var URIType $FailureToURI
     */
    protected $FailureToURI = null;

    /**
     * @var FlowPathType[] $FlowPath
     */
    protected $FlowPath = null;

    /**
     * @var MsgTypeType $MsgType
     */
    protected $MsgType = null;

    /**
     * @var PriorityType $Priority
     */
    protected $Priority = null;

    /**
     * @var URIType $ReplyToURI
     */
    protected $ReplyToURI = null;

    /**
     * @var URIType $SenderURI
     */
    protected $SenderURI = null;

    /**
     * @var TimeoutType $TimeoutMillis
     */
    protected $TimeoutMillis = null;

    /**
     * @var TransactionIdType $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @var TransactionIdType $ExternalTransactionId
     */
    protected $ExternalTransactionId = null;

    /**
     * @var boolean $RetryFlag
     */
    protected $RetryFlag = null;

    /**
     * @param URIType $OriginatorURI
     * @param \DateTime $Timestamp
     */
    public function __construct($OriginatorURI, \DateTime $Timestamp)
    {
      $this->OriginatorURI = $OriginatorURI;
      $this->Timestamp = $Timestamp->format(\DateTime::ATOM);
    }

    /**
     * @return URIType
     */
    public function getOriginatorURI()
    {
      return $this->OriginatorURI;
    }

    /**
     * @param URIType $OriginatorURI
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setOriginatorURI($OriginatorURI)
    {
      $this->OriginatorURI = $OriginatorURI;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->Timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Timestamp
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setTimestamp(\DateTime $Timestamp)
    {
      $this->Timestamp = $Timestamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ActivityNameType
     */
    public function getActivityName()
    {
      return $this->ActivityName;
    }

    /**
     * @param ActivityNameType $ActivityName
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setActivityName($ActivityName)
    {
      $this->ActivityName = $ActivityName;
      return $this;
    }

    /**
     * @return ActivityStatusType
     */
    public function getActivityStatus()
    {
      return $this->ActivityStatus;
    }

    /**
     * @param ActivityStatusType $ActivityStatus
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setActivityStatus($ActivityStatus)
    {
      $this->ActivityStatus = $ActivityStatus;
      return $this;
    }

    /**
     * @return TransactionIdType
     */
    public function getCorrelationId()
    {
      return $this->CorrelationId;
    }

    /**
     * @param TransactionIdType $CorrelationId
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setCorrelationId($CorrelationId)
    {
      $this->CorrelationId = $CorrelationId;
      return $this;
    }

    /**
     * @return URIType
     */
    public function getDestinationURI()
    {
      return $this->DestinationURI;
    }

    /**
     * @param URIType $DestinationURI
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setDestinationURI($DestinationURI)
    {
      $this->DestinationURI = $DestinationURI;
      return $this;
    }

    /**
     * @return URIType
     */
    public function getFailureToURI()
    {
      return $this->FailureToURI;
    }

    /**
     * @param URIType $FailureToURI
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setFailureToURI($FailureToURI)
    {
      $this->FailureToURI = $FailureToURI;
      return $this;
    }

    /**
     * @return FlowPathType[]
     */
    public function getFlowPath()
    {
      return $this->FlowPath;
    }

    /**
     * @param FlowPathType[] $FlowPath
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setFlowPath(array $FlowPath = null)
    {
      $this->FlowPath = $FlowPath;
      return $this;
    }

    /**
     * @return MsgTypeType
     */
    public function getMsgType()
    {
      return $this->MsgType;
    }

    /**
     * @param MsgTypeType $MsgType
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setMsgType($MsgType)
    {
      $this->MsgType = $MsgType;
      return $this;
    }

    /**
     * @return PriorityType
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param PriorityType $Priority
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return URIType
     */
    public function getReplyToURI()
    {
      return $this->ReplyToURI;
    }

    /**
     * @param URIType $ReplyToURI
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setReplyToURI($ReplyToURI)
    {
      $this->ReplyToURI = $ReplyToURI;
      return $this;
    }

    /**
     * @return URIType
     */
    public function getSenderURI()
    {
      return $this->SenderURI;
    }

    /**
     * @param URIType $SenderURI
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setSenderURI($SenderURI)
    {
      $this->SenderURI = $SenderURI;
      return $this;
    }

    /**
     * @return TimeoutType
     */
    public function getTimeoutMillis()
    {
      return $this->TimeoutMillis;
    }

    /**
     * @param TimeoutType $TimeoutMillis
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setTimeoutMillis($TimeoutMillis)
    {
      $this->TimeoutMillis = $TimeoutMillis;
      return $this;
    }

    /**
     * @return TransactionIdType
     */
    public function getTransactionId()
    {
      return $this->TransactionId;
    }

    /**
     * @param TransactionIdType $TransactionId
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
      return $this;
    }

    /**
     * @return TransactionIdType
     */
    public function getExternalTransactionId()
    {
      return $this->ExternalTransactionId;
    }

    /**
     * @param TransactionIdType $ExternalTransactionId
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setExternalTransactionId($ExternalTransactionId)
    {
      $this->ExternalTransactionId = $ExternalTransactionId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRetryFlag()
    {
      return $this->RetryFlag;
    }

    /**
     * @param boolean $RetryFlag
     * @return \BPolNet\A\VendorApi\Lib\MessageHeaderType
     */
    public function setRetryFlag($RetryFlag)
    {
      $this->RetryFlag = $RetryFlag;
      return $this;
    }

}
