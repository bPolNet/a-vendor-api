<?php

namespace BPolNet\A\VendorApi\Lib;

class GetOrderStatusDetailsResponsePayloadType
{

    /**
     * @var GetOrderStatusDetailsResponseBodyType $Body
     */
    protected $Body = null;


    public function __construct()
    {

    }

    /**
     * @return GetOrderStatusDetailsResponseBodyType
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param GetOrderStatusDetailsResponseBodyType $Body
     * @return \BPolNet\A\VendorApi\Lib\GetOrderStatusDetailsResponsePayloadType
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
