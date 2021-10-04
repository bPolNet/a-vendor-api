<?php

namespace BPolNet\A\VendorApi\Lib;

class Options
{

    /**
     * @var boolean $VariantsEqual
     */
    protected $VariantsEqual = null;

    /**
     * @var boolean $VariantsAllowed
     */
    protected $VariantsAllowed = null;

    /**
     * @param boolean $VariantsEqual
     * @param boolean $VariantsAllowed
     */
    public function __construct($VariantsEqual, $VariantsAllowed)
    {
      $this->VariantsEqual = $VariantsEqual;
      $this->VariantsAllowed = $VariantsAllowed;
    }

    /**
     * @return boolean
     */
    public function getVariantsEqual()
    {
      return $this->VariantsEqual;
    }

    /**
     * @param boolean $VariantsEqual
     * @return \BPolNet\A\VendorApi\Lib\Options
     */
    public function setVariantsEqual($VariantsEqual)
    {
      $this->VariantsEqual = $VariantsEqual;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVariantsAllowed()
    {
      return $this->VariantsAllowed;
    }

    /**
     * @param boolean $VariantsAllowed
     * @return \BPolNet\A\VendorApi\Lib\Options
     */
    public function setVariantsAllowed($VariantsAllowed)
    {
      $this->VariantsAllowed = $VariantsAllowed;
      return $this;
    }

}
