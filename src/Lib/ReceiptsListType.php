<?php

namespace BPolNet\A\VendorApi\Lib;

class ReceiptsListType
{

    /**
     * @var \DateTime $ReceiptListDate
     */
    protected $ReceiptListDate = null;

    /**
     * @var string $ReceiptListId
     */
    protected $ReceiptListId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getReceiptListDate()
    {
      if ($this->ReceiptListDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReceiptListDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReceiptListDate
     * @return \BPolNet\A\VendorApi\Lib\ReceiptsListType
     */
    public function setReceiptListDate(\DateTime $ReceiptListDate = null)
    {
      if ($ReceiptListDate == null) {
       $this->ReceiptListDate = null;
      } else {
        $this->ReceiptListDate = $ReceiptListDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiptListId()
    {
      return $this->ReceiptListId;
    }

    /**
     * @param string $ReceiptListId
     * @return \BPolNet\A\VendorApi\Lib\ReceiptsListType
     */
    public function setReceiptListId($ReceiptListId)
    {
      $this->ReceiptListId = $ReceiptListId;
      return $this;
    }

}
