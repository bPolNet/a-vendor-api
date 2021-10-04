<?php

declare(strict_types=1);

namespace BPolNet\A\VendorApi;

use BPolNet\A\VendorApi\Lib\WsdlClassMapping;

class TransportInterface
{
    public const CONNECTION_OPTIONS = [
        'classmap' => WsdlClassMapping::WSDL_CLASS_MAPPING,
    ];
}
