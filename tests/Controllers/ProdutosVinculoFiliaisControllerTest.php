<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Tests\Controllers;

use ApiB4CLib\Controllers\ProdutosVinculoFiliaisController;
use ApiB4CLib\Exceptions;
use ApiB4CLib\Models;
use Core\TestCase\TestParam;

class ProdutosVinculoFiliaisControllerTest extends BaseTestController
{
    /**
     * @var ProdutosVinculoFiliaisController ProdutosVinculoFiliaisController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getProdutosVinculoFiliaisController();
    }

    public function testProdutosFiliais()
    {
        // Parameters for the API call
        $body = TestParam::object(
            "[\r\n  {\r\n    \"sku\": \"123\",\r\n    \"faturamento\": [\r\n      {\r\n        " .
            "\"unidade\": 1,\r\n        \"logistica\": [\r\n          1,\r\n          2,\r\n    " .
            "      3\r\n        ]\r\n      }\r\n    ]\r\n  }\r\n]",
            Models\ProdutosFiliaisRequest::class,
            1
        );

        // Perform API call
        try {
            self::$controller->produtosFiliais($body);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(200)->assert();
    }
}
