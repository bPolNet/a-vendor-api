<?php

declare(strict_types=1);

namespace BPolNet\A\VendorApi\Tests;

use Exception;
use Symfony\Component\Yaml\Yaml;
use Throwable;

class TestConfigSupplier
{
    public const CONFIG_DIR = 'config';

    /**
     * @return string[]
     * @throws Exception
     */
    public static function get(string $file): array
    {
        try {
            $file = self::getConfigDir() . $file;
            if (!file_exists($file)) {
                throw new Exception('File do not exist:' . $file);
            }
            $params = Yaml::parse(file_get_contents($file));
            $params = $params[key($params)];
        } catch (Throwable $e) {
            throw new Exception("Unable to parse config file: " . $e->getMessage());
        }

        return [
            'wsdl' => $params['wsdl'],
            'cert' => self::getConfigDir() . $params['cert'],
            'cert_pass' => $params['cert_pass'],
            'user' => $params['user'],
            'pass' => $params['pass'],
        ];
    }

    public static function getConfigDir(): string
    {
        return __DIR__ . '/' . self::CONFIG_DIR . '/';
    }
}
