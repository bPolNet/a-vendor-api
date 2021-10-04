<?php

namespace BPolNet\A\VendorApi\Lib;

class ConfirmPurchaseOrderResponseMessageType extends ResultMessageTemplateType
{

    /**
     * @param MessageHeaderType $Header
     * @param MessageResultType $Result
     */
    public function __construct($Header, $Result)
    {
      parent::__construct($Header, $Result);
    }

}
