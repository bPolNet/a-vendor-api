<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusDetailsResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @var GetOrderStatusDetailsResponsePayloadType $GetOrderStatusDetailsResponsePayload
     */
    protected $GetOrderStatusDetailsResponsePayload = null;

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     * @param GetOrderStatusDetailsResponsePayloadType $GetOrderStatusDetailsResponsePayload
     */
    public function __construct($Header, $Result, $GetOrderStatusDetailsResponsePayload)
    {
      parent::__construct($Header, $Result);
      $this->GetOrderStatusDetailsResponsePayload = $GetOrderStatusDetailsResponsePayload;
    }

    /**
     * @return GetOrderStatusDetailsResponsePayloadType
     */
    public function getGetOrderStatusDetailsResponsePayload()
    {
      return $this->GetOrderStatusDetailsResponsePayload;
    }

    /**
     * @param GetOrderStatusDetailsResponsePayloadType $GetOrderStatusDetailsResponsePayload
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusDetailsResponseMessageType
     */
    public function setGetOrderStatusDetailsResponsePayload($GetOrderStatusDetailsResponsePayload)
    {
      $this->GetOrderStatusDetailsResponsePayload = $GetOrderStatusDetailsResponsePayload;
      return $this;
    }

}
