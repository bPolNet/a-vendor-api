<?php

namespace BPolNet\A\VendorApi\Lib;

class ImageType
{

    /**
     * @var string $Url
     */
    protected $Url = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @param string $Url
     * @param string $Title
     */
    public function __construct($Url, $Title)
    {
      $this->Url = $Url;
      $this->Title = $Title;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return \BPolNet\A\VendorApi\Lib\ImageType
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \BPolNet\A\VendorApi\Lib\ImageType
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

}
