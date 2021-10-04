<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoryParametersRequestMessageType
{

    /**
     * @var GetPlatformCategoryParametersRequestPayloadType $GetPlatformCategoryParametersRequestPayload
     */
    protected $GetPlatformCategoryParametersRequestPayload = null;

    /**
     * @param GetPlatformCategoryParametersRequestPayloadType $GetPlatformCategoryParametersRequestPayload
     */
    public function __construct($GetPlatformCategoryParametersRequestPayload)
    {
      $this->GetPlatformCategoryParametersRequestPayload = $GetPlatformCategoryParametersRequestPayload;
    }

    /**
     * @return GetPlatformCategoryParametersRequestPayloadType
     */
    public function getGetPlatformCategoryParametersRequestPayload()
    {
      return $this->GetPlatformCategoryParametersRequestPayload;
    }

    /**
     * @param GetPlatformCategoryParametersRequestPayloadType $GetPlatformCategoryParametersRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoryParametersRequestMessageType
     */
    public function setGetPlatformCategoryParametersRequestPayload($GetPlatformCategoryParametersRequestPayload)
    {
      $this->GetPlatformCategoryParametersRequestPayload = $GetPlatformCategoryParametersRequestPayload;
      return $this;
    }

}
