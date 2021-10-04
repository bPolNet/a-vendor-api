<?php

namespace BPolNet\A\VendorApi\Lib;

class GetPlatformCategoriesResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var GetPlatformCategoriesResponsePayloadType $GetPlatformCategoriesResponsePayload
     */
    protected $GetPlatformCategoriesResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param GetPlatformCategoriesResponsePayloadType $GetPlatformCategoriesResponsePayload
     */
    public function __construct($Header, $Result, $GetPlatformCategoriesResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->GetPlatformCategoriesResponsePayload = $GetPlatformCategoriesResponsePayload;
    }

    /**
     * @return GetPlatformCategoriesResponsePayloadType
     */
    public function getGetPlatformCategoriesResponsePayload()
    {
      return $this->GetPlatformCategoriesResponsePayload;
    }

    /**
     * @param GetPlatformCategoriesResponsePayloadType $GetPlatformCategoriesResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\GetPlatformCategoriesResponseMessageType
     */
    public function setGetPlatformCategoriesResponsePayload($GetPlatformCategoriesResponsePayload)
    {
      $this->GetPlatformCategoriesResponsePayload = $GetPlatformCategoriesResponsePayload;
      return $this;
    }

}
