<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPackingSlipResponseBodyType
{

    /**
     * @var PackingSlipType[] $PackingSlip
     */
    protected $PackingSlip = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PackingSlipType[]
     */
    public function getPackingSlip()
    {
      return $this->PackingSlip;
    }

    /**
     * @param PackingSlipType[] $PackingSlip
     * @return \BPolNet\A\VendorApi\Lib\GetPackingSlipResponseBodyType
     */
    public function setPackingSlip(array $PackingSlip = null)
    {
      $this->PackingSlip = $PackingSlip;
      return $this;
    }

}
