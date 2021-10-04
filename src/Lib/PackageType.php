<?php

namespace BPolNet\A\VendorApi\Lib;

class PackageType
{

    /**
     * @var Type $Type
     */
    protected $Type = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @param Type $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return Type
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param Type $Type
     * @return \BPolNet\A\VendorApi\Lib\PackageType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \BPolNet\A\VendorApi\Lib\PackageType
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \BPolNet\A\VendorApi\Lib\PackageType
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

}
