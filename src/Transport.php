<?php

declare(strict_types=1);

namespace BPolNet\A\VendorApi;

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use SoapClient;
use SoapFault;
use Throwable;

class Transport extends SoapClient implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    /**
     * @param mixed $wsdl
     * @param string[] $options
     * @throws TransportException
     */
    public function __construct($wsdl, array $options = [])
    {
        try {
            parent::__construct($wsdl, $options);
        } catch (SoapFault $exception) {
            throw new TransportException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = 0): string
    {
        $response = parent::__doRequest($request, $location, $action, $version, $oneWay);
        if (null !== $this->logger) {
            $this->logger->info(sprintf(
                ">>>>>>>>\n%s\nLocation: %s\nAction: %s\nVersion: %s\n<<<<<<<<\n%s\n--------\n%s",
                $request,
                $location,
                $action,
                $version,
                $response,
                $this->formatException($this->__soap_fault ?? null)
            ));
        }
        return $response;
    }

    private function formatException(?Throwable $e): string
    {
        if (null === $e) {
            return "";
        }

        $exceptionString = sprintf(
            'Exception: "%s" (Message: "%s", Code: %d)',
            get_class($e),
            $e->getMessage(),
            $e->getCode()
        );

        if ($e instanceof SoapFault) {
            $soapDetail = "SoapFault detail:";
            if (isset($e->faultcode)) {
                $soapDetail .= ' faultcode: ' . $e->faultcode;
            }

            if (isset($e->faultactor)) {
                $soapDetail .= ' faultactor: ' . $e->faultactor;
            }

            if (isset($e->detail)) {
                if (is_string($e->detail)) {
                    $soapDetail .= ' detail: ' . $e->detail;
                } elseif (is_object($e->detail) || is_array($e->detail)) {
                    $soapDetail .= ' detail: ' . json_encode($e->detail);
                }
            }

            $exceptionString .= PHP_EOL . $soapDetail;
        }

        return $exceptionString;
    }
}
