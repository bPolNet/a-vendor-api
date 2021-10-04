<?php

namespace BPolNet\A\VendorApi\Lib;

class Group
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string $Name
     */
    public function __construct($Name)
    {
      $this->Name = $Name;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \BPolNet\A\VendorApi\Lib\Group
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
