<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Tests\Controllers;

use ApiB4CLib\Controllers\ObservaEsPedidosController;
use ApiB4CLib\Exceptions;
use ApiB4CLib\Models;
use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;

class ObservaEsPedidosControllerTest extends BaseTestController
{
    /**
     * @var ObservaEsPedidosController ObservaEsPedidosController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getObservaEsPedidosController();
    }

    public function testAtualizarObservaO()
    {
        // Parameters for the API call
        $body = TestParam::object(
            "{\r\n  \"observacao\": \"testando observacao api put 1\"\r\n}",
            Models\AtualizarObservaORequest::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->atualizarObservaO($body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Server'] = ['nginx/1.23.3', false];
        $headers['Transfer-Encoding'] = ['chunked', false];
        $headers['Connection'] = ['keep-alive', false];
        $headers['X-Powered-By'] = ['PHP/7.2.34', false];
        $headers['Expires'] = ['Thu, 19 Nov 1981 08:52:00 GMT', false];
        $headers['Cache-Control'] = ['no-store, no-cache, must-revalidate', false];
        $headers['Pragma'] = ['no-cache', false];
        $headers['Date'] = ['Tue, 16 Apr 2024 18:39:24 GMT', false];
        $headers['X-RateLimit-Limit'] = ['10000', false];
        $headers['X-RateLimit-Remaining'] = ['9999', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                "{\r\n  \"message\": \"Observacao atualizada com sucesso\",\r\n  \"responseCode" .
                "\": \"201\"\r\n}"
            )))
            ->assert();
    }
}
