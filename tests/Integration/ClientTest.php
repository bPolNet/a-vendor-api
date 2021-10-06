<?php

declare(strict_types=1);

namespace BPolNet\A\VendorApi\Tests\Integration;

use BPolNet\A\VendorApi\Client;
use BPolNet\A\VendorApi\Lib\CancelPurchaseOrderResponseMessageType;
use BPolNet\A\VendorApi\Lib\ConfirmPurchaseOrderResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetCategoriesResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetCategoryParametersResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetInvoiceStatusResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetOrderStatusDetailsResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetOrderStatusResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetPackingSlipResponseMessageType;
use BPolNet\A\VendorApi\Lib\GetPurchaseOrderResponseMessageType;
use BPolNet\A\VendorApi\Lib\ProductPrice;
use BPolNet\A\VendorApi\Lib\ProductStock;
use BPolNet\A\VendorApi\Lib\PurchaseInvoiceLineType;
use BPolNet\A\VendorApi\Lib\PurchaseInvoiceType;
use BPolNet\A\VendorApi\Lib\ShipmentContainerType;
use BPolNet\A\VendorApi\Lib\ShipmentStatus;
use BPolNet\A\VendorApi\Lib\SubmitInvoiceResponseMessageType;
use BPolNet\A\VendorApi\Lib\SubmitPriceListAsyncResponseMessageType;
use BPolNet\A\VendorApi\Lib\SubmitShipmentStatusResponseMessageType;
use BPolNet\A\VendorApi\Lib\SubmitStockResponseMessageType;
use BPolNet\A\VendorApi\Lib\TrackingEventType;
use BPolNet\A\VendorApi\Tests\TestConfigSupplier;
use DateTime;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /** @var Client */
    private $client;

    public function testGetCategories(): void
    {
        $response = $this->client->getCategories();

        $this->assertInstanceOf(GetCategoriesResponseMessageType::class, $response);
        $this->assertEquals('VAP-200', $response->getResult()->getResultCode());
        $this->assertEquals('Request successfully processed', $response->getResult()->getResultMessage());
    }

    public function testGetCategoryParameters(): void
    {
        $response = $this->client->getCategoryParameters('fe014f6b-88f0-45a0-bfc2-fb19b369fb6b');

        $this->assertInstanceOf(GetCategoryParametersResponseMessageType::class, $response);
        $this->assertEquals('VAP-404', $response->getResult()->getResultCode());
        $this->assertEquals('No resources found for given request', $response->getResult()->getResultMessage());
    }

    public function testGetPurchaseOrder(): void
    {
        $response = $this->client->getPurchaseOrder();

        $this->assertInstanceOf(GetPurchaseOrderResponseMessageType::class, $response);
        $this->assertEquals('VAP-404', $response->getResult()->getResultCode());
        $this->assertEquals('No resources found for given request', $response->getResult()->getResultMessage());
    }

    public function testSubmitStock(): void
    {
        $stock = [
            new ProductStock('not-existing-external-item-id', 10),
        ];

        $response = $this->client->submitStock($stock);

        $this->assertInstanceOf(SubmitStockResponseMessageType::class, $response);
        $this->assertEquals('VAP-201', $response->getResult()->getResultCode());
        $this->assertEquals('Object successfully created', $response->getResult()->getResultMessage());
    }

    public function testSubmitPriceList(): void
    {
        $prices = [
            new ProductPrice('not-existing-external-item-id', 10.0, 1.0)
        ];

        $response = $this->client->submitPriceList($prices);
        $this->assertInstanceOf(SubmitPriceListAsyncResponseMessageType::class, $response);
        $this->assertEquals('VAP-201', $response->getResult()->getResultCode());
        $this->assertEquals('Object successfully created', $response->getResult()->getResultMessage());
    }

    public function testConfirmPurchaseOrder(): void
    {
        $response = $this->client->confirmPurchaseOrder('not-existing-id', new DateTime());

        $this->assertInstanceOf(ConfirmPurchaseOrderResponseMessageType::class, $response);
        $this->assertEquals('VAP-422', $response->getResult()->getResultCode());
        $this->assertEquals('Request cannot be fulfilled', $response->getResult()->getResultMessage());
        $this->assertEquals(
            '[!] Purchase Order not-existing-id not found',
            $response->getResult()->getAdditionalMessages()
        );
    }

    public function testCancelPurchaseOrder(): void
    {
        $response = $this->client->cancelPurchaseOrder('not-existing-id');

        $this->assertInstanceOf(CancelPurchaseOrderResponseMessageType::class, $response);
        $this->assertEquals('VAP-202', $response->getResult()->getResultCode());
        $this->assertEquals('Request cannot be fulfilled', $response->getResult()->getResultMessage());
        $this->assertEquals(
            '[!] Purchase Order not-existing-id not found',
            $response->getResult()->getAdditionalMessages()
        );
    }

    public function testSubmitShipmentStatus(): void
    {
        $statuses = [
            new ShipmentStatus(
                'purchase-id',
                'sales-id',
                'vendor-order-id',
                new ShipmentContainerType(
                    'CARIER-ID',
                    'tracking-number',
                    [new TrackingEventType('status', new DateTime())]
                )
            ),
        ];

        $response = $this->client->submitShipmentStatus($statuses);

        $this->assertInstanceOf(SubmitShipmentStatusResponseMessageType::class, $response);
        $this->assertEquals('VAP-422', $response->getResult()->getResultCode());
        $this->assertEquals('Request cannot be fulfilled', $response->getResult()->getResultMessage());
        $this->assertEquals('[!] Purchase order not found', $response->getResult()->getAdditionalMessages());
    }

    public function testGetPackingSlip(): void
    {
        $response = $this->client->getPackingSlip();

        $this->assertInstanceOf(GetPackingSlipResponseMessageType::class, $response);
        $this->assertEquals('VAP-404', $response->getResult()->getResultCode());
        $this->assertEquals('No resources found for given request', $response->getResult()->getResultMessage());
        $this->assertEquals('Packing Slip not found', $response->getResult()->getAdditionalMessages());
    }

    public function testGetInvoiceStatus(): void
    {
        $id1 = 'not-existing-id-1';
        $id2 = 'not-existing-id-2';
        $response = $this->client->getInvoiceStatus([$id1, $id2]);

        $this->assertInstanceOf(GetInvoiceStatusResponseMessageType::class, $response);
        $this->assertEquals('VAP-404', $response->getResult()->getResultCode());
        $this->assertEquals('No resources found for given request', $response->getResult()->getResultMessage());
        // this can be single object, array or null
        $invoiceStatus = $response->getGetInvoiceStatusResponsePayload()->getBody()->getInvoiceStatus()[0];
        $this->assertEquals($id1, $invoiceStatus->getInvoiceId());
        $this->assertEquals('NotFound', $invoiceStatus->getInvoiceStatus());
    }

    public function testSubmitInvoice(): void
    {
        $line = new PurchaseInvoiceLineType(
            '2',
            'external-item-id',
            'Super Tyre',
            'unit-id',
            10,
            90,
            100,
            10,
            10,
            90,
            100,
            10
        );

        $invoice = new PurchaseInvoiceType(
            'invoice-id',
            (new DateTime())->format('Y-m-d'),
            (new DateTime())->format('Y-m-d'),
            'Z006',
            'Abu Dhabi',
            '101th Ave',
            'AED-AVH',
            'Sheik Abdulla',
            'BLEBLE666',
            'Kraków',
            'Kolejowa',
            '30-600',
            'Franek Dolas',
            'QQQ-999',
            1000,
            900,
            100,
            [$line]
        );

        $response = $this->client->submitInvoice($invoice);

        $this->assertInstanceOf(SubmitInvoiceResponseMessageType::class, $response);
        $this->assertEquals('VAP-422', $response->getResult()->getResultCode());
        $this->assertEquals('Request cannot be fulfilled', $response->getResult()->getResultMessage());
        $this->assertEquals(
            '[!] Packing Slip reference incorrect or missing',
            $response->getResult()->getAdditionalMessages()
        );
    }

    public function testGetOrderStatus(): void
    {
        $response = $this->client->getOrderStatus('not-existing-id');

        $this->assertInstanceOf(GetOrderStatusResponseMessageType::class, $response);
        $this->assertEquals('VAP-404', $response->getResult()->getResultCode());
        $this->assertEquals('No resources found for given request', $response->getResult()->getResultMessage());
    }

    public function testGetOrderStatusDetails(): void
    {
        $response = $this->client->getOrderStatusDetails('not-existing-id');

        $this->assertInstanceOf(GetOrderStatusDetailsResponseMessageType::class, $response);
        $this->assertEquals('VAP-404', $response->getResult()->getResultCode());
        $this->assertEquals('No resources found for given request', $response->getResult()->getResultMessage());
    }

    protected function setUp(): void
    {
        $config = TestConfigSupplier::get('test.yaml');

        $this->client = new Client(
            $config['wsdl'],
            $config['cert'],
            $config['cert_pass'],
            $config['user'],
            $config['pass']
        );
    }
}
