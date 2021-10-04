<?php

namespace BPolNet\A\VendorApi\Lib;

class InterfaceDetailsType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @param string $Name
     * @param string $Version
     */
    public function __construct($Name, $Version)
    {
      $this->Name = $Name;
      $this->Version = $Version;
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
     * @return \BPolNet\A\VendorApi\Lib\InterfaceDetailsType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return \BPolNet\A\VendorApi\Lib\InterfaceDetailsType
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
