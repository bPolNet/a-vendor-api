<?php

namespace BPolNet\A\VendorApi\Lib;

class GetCategoryParametersResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var GetCategoryParametersResponsePayloadType $GetCategoryParametersResponsePayload
     */
    protected $GetCategoryParametersResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param GetCategoryParametersResponsePayloadType $GetCategoryParametersResponsePayload
     */
    public function __construct($Header, $Result, $GetCategoryParametersResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->GetCategoryParametersResponsePayload = $GetCategoryParametersResponsePayload;
    }

    /**
     * @return GetCategoryParametersResponsePayloadType
     */
    public function getGetCategoryParametersResponsePayload()
    {
      return $this->GetCategoryParametersResponsePayload;
    }

    /**
     * @param GetCategoryParametersResponsePayloadType $GetCategoryParametersResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\GetCategoryParametersResponseMessageType
     */
    public function setGetCategoryParametersResponsePayload($GetCategoryParametersResponsePayload)
    {
      $this->GetCategoryParametersResponsePayload = $GetCategoryParametersResponsePayload;
      return $this;
    }

}
