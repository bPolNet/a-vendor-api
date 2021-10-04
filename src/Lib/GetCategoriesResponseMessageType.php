<?php

namespace BPolNet\A\VendorApi\Lib;

class GetCategoriesResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var GetCategoriesResponsePayloadType $GetCategoriesResponsePayload
     */
    protected $GetCategoriesResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param GetCategoriesResponsePayloadType $GetCategoriesResponsePayload
     */
    public function __construct($Header, $Result, $GetCategoriesResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->GetCategoriesResponsePayload = $GetCategoriesResponsePayload;
    }

    /**
     * @return GetCategoriesResponsePayloadType
     */
    public function getGetCategoriesResponsePayload()
    {
      return $this->GetCategoriesResponsePayload;
    }

    /**
     * @param GetCategoriesResponsePayloadType $GetCategoriesResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\GetCategoriesResponseMessageType
     */
    public function setGetCategoriesResponsePayload($GetCategoriesResponsePayload)
    {
      $this->GetCategoriesResponsePayload = $GetCategoriesResponsePayload;
      return $this;
    }

}
