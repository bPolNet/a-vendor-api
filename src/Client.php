<?php

declare(strict_types=1);

namespace BPolNet\A\VendorApi;

use BPolNet\A\VendorApi\Lib\CancelPurchaseOrderRequestBodyType;
use BPolNet\A\VendorApi\Lib\CancelPurchaseOrderRequestMessageType;
use BPolNet\A\VendorApi\Lib\CancelPurchaseOrderRequestPayloadType;
use BPolNet\A\VendorApi\Lib\CancelPurchaseOrderResponseMessageType;
use BPolNet\A\VendorApi\Lib\ConfirmPurchaseOrderRequestBodyType;
use BPolNet\A\VendorApi\Lib\ConfirmPurchaseOrderRequestMessageType;
use BPolNet\A\VendorApi\Lib\ConfirmPurchaseOrderRequestPayloadType;
use BPolNet\A\VendorApi\Lib\ConfirmPurchaseOrderResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetCategoriesRequestMessageType;
use BPolNet\A\VendorApi\Lib\GetCategoriesRequestPayloadType;
use BPolNet\A\VendorApi\Lib\GetCategoriesResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetCategoryParametersRequestBodyType;
use BPolNet\A\VendorApi\Lib\GetCategoryParametersRequestMessageType;
use BPolNet\A\VendorApi\Lib\GetCategoryParametersRequestPayloadType;
use BPolNet\A\VendorApi\Lib\GetCategoryParametersResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetInvoiceStatusRequestBodyType;
use BPolNet\A\VendorApi\Lib\GetInvoiceStatusRequestMessageType;
use BPolNet\A\VendorApi\Lib\GetInvoiceStatusRequestPayloadType;
use BPolNet\A\VendorApi\Lib\GetInvoiceStatusResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetPackingSlipRequestBodyType;
use BPolNet\A\VendorApi\Lib\GetPackingSlipRequestMessageType;
use BPolNet\A\VendorApi\Lib\GetPackingSlipRequestPayloadType;
use BPolNet\A\VendorApi\Lib\GetPackingSlipResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetPurchaseOrderRequestMessageType;
use BPolNet\A\VendorApi\Lib\GetPurchaseOrderRequestPayloadType;
use BPolNet\A\VendorApi\Lib\GetPurchaseOrderResponseMessageType;
use BPolNet\A\VendorApi\Lib\ProductPrice;
use BPolNet\A\VendorApi\Lib\ProductStock;
use BPolNet\A\VendorApi\Lib\PurchaseInvoiceType;
use BPolNet\A\VendorApi\Lib\ShipmentStatus;
use BPolNet\A\VendorApi\Lib\SubmitInvoiceRequestBodyType;
use BPolNet\A\VendorApi\Lib\SubmitInvoiceRequestMessageType;
use BPolNet\A\VendorApi\Lib\SubmitInvoiceRequestPayloadType;
use BPolNet\A\VendorApi\Lib\SubmitInvoiceResponseMessageType;
use BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncRequestBodyType;
use BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncRequestMessageType;
use BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncRequestPayloadType;
use BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncResponseMessageType;
use BPolNet\A\VendorApi\Lib\SubmitShipmentStatusRequestBodyType;
use BPolNet\A\VendorApi\Lib\SubmitShipmentStatusRequestMessageType;
use BPolNet\A\VendorApi\Lib\SubmitShipmentStatusRequestPayloadType;
use BPolNet\A\VendorApi\Lib\SubmitShipmentStatusResponseMessageType;
use BPolNet\A\VendorApi\Lib\SubmitStockRequestBodyType;
use BPolNet\A\VendorApi\Lib\SubmitStockRequestMessageType;
use BPolNet\A\VendorApi\Lib\SubmitStockRequestPayloadType;
use BPolNet\A\VendorApi\Lib\SubmitStockResponseMessageType;
use DateTime;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use SoapFault;

class Client implements LoggerAwareInterface
{
    /** @var LoggerInterface */
    private $logger;

    /** @var Transport */
    private $transport;

    /** @var string */
    private $wsdl;

    /** @var string */
    private $certPath;

    /** @var string */
    private $certPassword;

    /** @var string */
    private $user;

    /** @var string */
    private $password;

    public function __construct(
        string $wsdl,
        string $certPath,
        string $certPassword,
        string $user,
        string $password,
        ?LoggerInterface $logger = null
    ) {
        $this->wsdl = $wsdl;
        $this->certPath = $certPath;
        $this->certPassword = $certPassword;
        $this->user = $user;
        $this->password = $password;
        $this->logger = $logger;
    }

    /**
     * @throws TransportException
     */
    public function getCategories(): GetCategoriesResponseMessageType
    {
        $request = new GetCategoriesRequestMessageType(new GetCategoriesRequestPayloadType());
        return $this->sendSoap('GetCategories', $request);
    }

    /**
     * @throws TransportException
     */
    public function getCategoryParameters(string $id): GetCategoryParametersResponseMessageType
    {
        $request = new GetCategoryParametersRequestMessageType(
            new GetCategoryParametersRequestPayloadType(
                new GetCategoryParametersRequestBodyType($id)
            )
        );

        return $this->sendSoap('GetCategoryParameters', $request);
    }


    /**
     * @param ProductStock[] $productStock
     * @throws TransportException
     */
    public function submitStock(array $productStock): SubmitStockResponseMessageType
    {
        $request = new SubmitStockRequestMessageType(
            new SubmitStockRequestPayloadType(
                new SubmitStockRequestBodyType($productStock)
            )
        );

        return $this->sendSoap('SubmitStock', $request);
    }

    /**
     * @param ProductPrice[] $productPrice
     * @throws TransportException
     */
    public function submitPriceList(
        array $productPrice,
        ?DateTime $startDate = null,
        ?DateTime $endDate = null
    ): SubmitPriceListAsyncResponseMessageType {
        $body = new SubmitPriceListAsyncRequestBodyType($productPrice);
        $startDate ? $body->setStartDate($startDate->format('Y-m-d')) : null;
        $endDate ? $body->setEndDate($endDate->format('Y-m-d')) : null;

        $request = new SubmitPriceListAsyncRequestMessageType(
            (new SubmitPriceListAsyncRequestPayloadType())->setBody($body)
        );

        return $this->sendSoap('SubmitPriceListAsync', $request);
    }

    /**
     * @throws TransportException
     */
    public function getPurchaseOrder(): GetPurchaseOrderResponseMessageType
    {
        $request = new GetPurchaseOrderRequestMessageType(new GetPurchaseOrderRequestPayloadType());
        return $this->sendSoap('GetPurchaseOrder', $request);
    }

    /**
     * @throws TransportException
     */
    public function confirmPurchaseOrder(string $id, DateTime $deliveryDate): ConfirmPurchaseOrderResponseMessageType
    {
        $request = new ConfirmPurchaseOrderRequestMessageType(
            new ConfirmPurchaseOrderRequestPayloadType(
                new ConfirmPurchaseOrderRequestBodyType($id, $deliveryDate)
            )
        );

        return$this->sendSoap('ConfirmPurchaseOrder', $request);
    }

    /**
     * @throws TransportException
     */
    public function cancelPurchaseOrder(string $id): CancelPurchaseOrderResponseMessageType
    {
        $request = new CancelPurchaseOrderRequestMessageType(
            new CancelPurchaseOrderRequestPayloadType(
                new CancelPurchaseOrderRequestBodyType($id)
            )
        );

        return$this->sendSoap('CancelPurchaseOrder', $request);
    }

    /**
     * @param ShipmentStatus[] $shipmentStatus
     * @throws TransportException
     */
    public function submitShipmentStatus(array $shipmentStatus): SubmitShipmentStatusResponseMessageType
    {
        $request = new SubmitShipmentStatusRequestMessageType(
            new SubmitShipmentStatusRequestPayloadType(
                new SubmitShipmentStatusRequestBodyType($shipmentStatus)
            )
        );

        return$this->sendSoap('SubmitShipmentStatus', $request);
    }

    /**
     * @throws TransportException
     */
    public function getPackingSlip(): GetPackingSlipResponseMessageType
    {
        $request = new GetPackingSlipRequestMessageType(
            new GetPackingSlipRequestPayloadType(
                new GetPackingSlipRequestBodyType()
            )
        );

        return$this->sendSoap('GetPackingSlip', $request);
    }

    /**
     * @param string[] $id
     * @throws TransportException
     */
    public function getInvoiceStatus(array $id): GetInvoiceStatusResponseMessageType
    {
        $request = new GetInvoiceStatusRequestMessageType(
            new GetInvoiceStatusRequestPayloadType(
                new GetInvoiceStatusRequestBodyType($id)
            )
        );

        return$this->sendSoap('GetInvoiceStatus', $request);
    }

    /**
     * @throws TransportException
     */
    public function submitInvoice(PurchaseInvoiceType $invoice): SubmitInvoiceResponseMessageType
    {
        $request = new SubmitInvoiceRequestMessageType(
            new SubmitInvoiceRequestPayloadType(
                new SubmitInvoiceRequestBodyType($invoice)
            )
        );

        return$this->sendSoap('SubmitInvoice', $request);
    }

    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
        $this->getTransport()->setLogger($logger);
    }

    /**
     * @param mixed|null $params
     * @return mixed
     * @throws TransportException
     */
    private function sendSoap(string $function, $params = null)
    {
        try {
            if (null !== $params) {
                return $this->getTransport()->$function($params);
            }
            return $this->getTransport()->$function();
        } catch (SoapFault $soapFault) {
            throw new TransportException($soapFault->getMessage());
        }
    }

    /** @throws TransportException */
    private function createTransport(): Transport
    {
        $options = TransportInterface::CONNECTION_OPTIONS;
        $options['local_cert'] = $this->certPath;
        $options['passphrase'] = $this->certPassword;
        $options['login'] = $this->user;
        $options['password'] = $this->password;

        $transport = new Transport($this->wsdl, $options);
        if ($this->logger) {
            $transport->setLogger($this->logger);
        }

        return $transport;
    }

    /** @throws TransportException */
    private function getTransport(): Transport
    {
        return
            empty($this->transport)
                ? ($this->transport = $this->createTransport())
                : $this->transport;
    }
}
