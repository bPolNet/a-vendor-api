<?php

namespace BPolNet\A\VendorApi\Lib;

class GetCategoriesRequestMessageType
{

    /**
     * @var GetCategoriesRequestPayloadType $GetCategoriesRequestPayload
     */
    protected $GetCategoriesRequestPayload = null;

    /**
     * @param GetCategoriesRequestPayloadType $GetCategoriesRequestPayload
     */
    public function __construct($GetCategoriesRequestPayload)
    {
      $this->GetCategoriesRequestPayload = $GetCategoriesRequestPayload;
    }

    /**
     * @return GetCategoriesRequestPayloadType
     */
    public function getGetCategoriesRequestPayload()
    {
      return $this->GetCategoriesRequestPayload;
    }

    /**
     * @param GetCategoriesRequestPayloadType $GetCategoriesRequestPayload
     * @return \BPolNet\A\VendorApi\Lib\GetCategoriesRequestMessageType
     */
    public function setGetCategoriesRequestPayload($GetCategoriesRequestPayload)
    {
      $this->GetCategoriesRequestPayload = $GetCategoriesRequestPayload;
      return $this;
    }

}
