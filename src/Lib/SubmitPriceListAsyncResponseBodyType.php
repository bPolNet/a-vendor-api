<?php

namespace BPolNet\A\VendorApi\Lib;

class SubmitPriceListAsyncResponseBodyType
{

    /**
     * @var string $TaskId
     */
    protected $TaskId = null;

    /**
     * @param string $TaskId
     */
    public function __construct($TaskId)
    {
      $this->TaskId = $TaskId;
    }

    /**
     * @return string
     */
    public function getTaskId()
    {
      return $this->TaskId;
    }

    /**
     * @param string $TaskId
     * @return \BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncResponseBodyType
     */
    public function setTaskId($TaskId)
    {
      $this->TaskId = $TaskId;
      return $this;
    }

}
