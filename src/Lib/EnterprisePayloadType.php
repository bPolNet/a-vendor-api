<?php

namespace BPolNet\A\VendorApi\Lib;

class EnterprisePayloadType
{

    /**
     * @var anydata[] $Body
     */
    protected $Body = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anydata[]
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param anydata[] $Body
     * @return \BPolNet\A\VendorApi\Lib\EnterprisePayloadType
     */
    public function setBody(array $Body = null)
    {
      $this->Body = $Body;
      return $this;
    }

}
