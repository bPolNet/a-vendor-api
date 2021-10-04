<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoriesRequestMessageType
{

    /**
     * @var GetPlatformCategoriesRequestPayloadType $GetPlatformCategoriesRequestPayload
     */
    protected $GetPlatformCategoriesRequestPayload = null;

    /**
     * @param GetPlatformCategoriesRequestPayloadType $GetPlatformCategoriesRequestPayload
     */
    public function __construct($GetPlatformCategoriesRequestPayload)
    {
      $this->GetPlatformCategoriesRequestPayload = $GetPlatformCategoriesRequestPayload;
    }

    /**
     * @return GetPlatformCategoriesRequestPayloadType
     */
    public function getGetPlatformCategoriesRequestPayload()
    {
      return $this->GetPlatformCategoriesRequestPayload;
    }

    /**
     * @param GetPlatformCategoriesRequestPayloadType $GetPlatformCategoriesRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoriesRequestMessageType
     */
    public function setGetPlatformCategoriesRequestPayload($GetPlatformCategoriesRequestPayload)
    {
      $this->GetPlatformCategoriesRequestPayload = $GetPlatformCategoriesRequestPayload;
      return $this;
    }

}
