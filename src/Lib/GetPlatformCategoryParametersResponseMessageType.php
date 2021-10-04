<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoryParametersResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var GetPlatformCategoryParametersResponsePayloadType $GetPlatformCategoryParametersResponsePayload
     */
    protected $GetPlatformCategoryParametersResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param GetPlatformCategoryParametersResponsePayloadType $GetPlatformCategoryParametersResponsePayload
     */
    public function __construct($Header, $Result, $GetPlatformCategoryParametersResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->GetPlatformCategoryParametersResponsePayload = $GetPlatformCategoryParametersResponsePayload;
    }

    /**
     * @return GetPlatformCategoryParametersResponsePayloadType
     */
    public function getGetPlatformCategoryParametersResponsePayload()
    {
      return $this->GetPlatformCategoryParametersResponsePayload;
    }

    /**
     * @param GetPlatformCategoryParametersResponsePayloadType $GetPlatformCategoryParametersResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoryParametersResponseMessageType
     */
    public function setGetPlatformCategoryParametersResponsePayload($GetPlatformCategoryParametersResponsePayload)
    {
      $this->GetPlatformCategoryParametersResponsePayload = $GetPlatformCategoryParametersResponsePayload;
      return $this;
    }

}
