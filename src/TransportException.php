<?php

declare(strict_types=1);

namespace BPolNet\A\VendorApi;

use Exception;

class TransportException extends Exception
{
    /**
     * @var string
     */
    private $rawResponse = '';

    public function getRawResponse(): string
    {
        return $this->rawResponse;
    }

    public function setRawResponse(string $rawResponse): TransportException
    {
        $this->rawResponse = $rawResponse;
        return $this;
    }
}
