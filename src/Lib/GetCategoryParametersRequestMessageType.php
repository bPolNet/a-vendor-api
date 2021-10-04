<?php

namespace BPolNet\A\VendorApi\Lib;

class GetCategoryParametersRequestMessageType
{

    /**
     * @var GetCategoryParametersRequestPayloadType $GetCategoryParametersRequestPayload
     */
    protected $GetCategoryParametersRequestPayload = null;

    /**
     * @param GetCategoryParametersRequestPayloadType $GetCategoryParametersRequestPayload
     */
    public function __construct($GetCategoryParametersRequestPayload)
    {
      $this->GetCategoryParametersRequestPayload = $GetCategoryParametersRequestPayload;
    }

    /**
     * @return GetCategoryParametersRequestPayloadType
     */
    public function getGetCategoryParametersRequestPayload()
    {
      return $this->GetCategoryParametersRequestPayload;
    }

    /**
     * @param GetCategoryParametersRequestPayloadType $GetCategoryParametersRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\GetCategoryParametersRequestMessageType
     */
    public function setGetCategoryParametersRequestPayload($GetCategoryParametersRequestPayload)
    {
      $this->GetCategoryParametersRequestPayload = $GetCategoryParametersRequestPayload;
      return $this;
    }

}
