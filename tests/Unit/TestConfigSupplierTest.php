<?php

declare(strict_types=1);

namespace BPolNet\A\VendorApi\Tests\Unit;

use BPolNet\A\VendorApi\Tests\TestConfigSupplier;
use Exception;
use PHPUnit\Framework\TestCase;

class TestConfigSupplierTest extends TestCase
{
    public function testGet(): void
    {
        $config = TestConfigSupplier::get('test.yaml.dist');

        self::assertCount(5, $config);
        self::assertEquals('wsdl', $config['wsdl']);
        self::assertEquals(TestConfigSupplier::getConfigDir() . 'converted_cert', $config['cert']);
        self::assertEquals('converted_cert_password', $config['cert_pass']);
        self::assertEquals('user', $config['user']);
        self::assertEquals('user_password', $config['pass']);

        $this->expectException(Exception::class);
        TestConfigSupplier::get('not-existing');
    }
}
