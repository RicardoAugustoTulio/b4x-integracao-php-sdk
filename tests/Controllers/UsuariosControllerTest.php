<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Tests\Controllers;

use ApiB4CLib\Controllers\UsuariosController;
use ApiB4CLib\Exceptions;
use ApiB4CLib\Models;
use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;

class UsuariosControllerTest extends BaseTestController
{
    /**
     * @var UsuariosController UsuariosController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getUsuariosController();
    }

    public function testListaUsuarios()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listaUsuarios();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Server'] = ['nginx/1.19.1', false];
        $headers['Transfer-Encoding'] = ['chunked', false];
        $headers['Connection'] = ['keep-alive', false];
        $headers['X-Powered-By'] = ['PHP/7.2.34', false];
        $headers['Expires'] = ['Thu, 19 Nov 1981 08:52:00 GMT', false];
        $headers['Cache-Control'] = ['no-store, no-cache, must-revalidate', false];
        $headers['Pragma'] = ['no-cache', false];
        $headers['Date'] = ['Mon, 08 May 2023 20:03:08 GMT', false];
        $headers['X-RateLimit-Limit'] = ['60', false];
        $headers['X-RateLimit-Remaining'] = ['57', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                "[\r\n  {\r\n    \"codigo\": \"4\",\r\n    \"nome\": \"Teste Api2\",\r\n    \"e" .
                "mail\": \"beyin50980@pixiil.com\",\r\n    \"status\": \"1\",\r\n    \"nivel\": " .
                "\"1\"\r\n  }\r\n]"
            )))
            ->assert();
    }

    public function testCadastrarUsuario()
    {
        // Parameters for the API call
        $body = TestParam::object(
            "{\r\n  \"codigo\": 5,\r\n  \"nome\": \"Teste Api2\",\r\n  \"login\": \"teste api\"" .
            ",\r\n  \"email\": \"beyin50980@pixiil.com\",\r\n  \"nivel\": \"1\",\r\n  \"filiais" .
            "\": [\r\n    {\r\n      \"filial\": \"0\"\r\n    }\r\n  ]\r\n}",
            Models\CadastrarUsuarioRequest::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->cadastrarUsuario($body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Server'] = ['nginx/1.19.1', false];
        $headers['Transfer-Encoding'] = ['chunked', false];
        $headers['Connection'] = ['keep-alive', false];
        $headers['X-Powered-By'] = ['PHP/7.2.34', false];
        $headers['Expires'] = ['Thu, 19 Nov 1981 08:52:00 GMT', false];
        $headers['Cache-Control'] = ['no-store, no-cache, must-revalidate', false];
        $headers['Pragma'] = ['no-cache', false];
        $headers['Date'] = ['Wed, 10 May 2023 16:49:08 GMT', false];
        $headers['X-RateLimit-Limit'] = ['60', false];
        $headers['X-RateLimit-Remaining'] = ['59', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                "{\r\n  \"message\": \"Usuario cadastrado com sucesso\",\r\n  \"responseCode\": \"201\"\r\n}"
            )))
            ->assert();
    }

    public function testAtualizarUsuario()
    {
        // Parameters for the API call
        $body = TestParam::object(
            "{\r\n  \"nome\": \"Teste Api3\",\r\n  \"login\": \"teste api\",\r\n  \"email\": \"" .
            "beyin50980@pixiil.com\",\r\n  \"nivel\": \"1\",\r\n  \"status\": \"0\",\r\n  \"fili" .
            "ais\": [\r\n    {\r\n      \"filial\": \"0\"\r\n    }\r\n  ]\r\n}",
            Models\AtualizarUsuarioRequest::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->atualizarUsuario($body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Server'] = ['nginx/1.19.1', false];
        $headers['Transfer-Encoding'] = ['chunked', false];
        $headers['Connection'] = ['keep-alive', false];
        $headers['X-Powered-By'] = ['PHP/7.2.34', false];
        $headers['Expires'] = ['Thu, 19 Nov 1981 08:52:00 GMT', false];
        $headers['Cache-Control'] = ['no-store, no-cache, must-revalidate', false];
        $headers['Pragma'] = ['no-cache', false];
        $headers['Date'] = ['Mon, 08 May 2023 20:12:53 GMT', false];
        $headers['X-RateLimit-Limit'] = ['60', false];
        $headers['X-RateLimit-Remaining'] = ['59', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                "{\r\n  \"message\": \"Usuario atualizado com sucesso\",\r\n  \"responseCode\": \"201\"\r\n}"
            )))
            ->assert();
    }

    public function testInativarUsuario()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->inativarUsuario();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Server'] = ['nginx/1.19.1', false];
        $headers['Transfer-Encoding'] = ['chunked', false];
        $headers['Connection'] = ['keep-alive', false];
        $headers['X-Powered-By'] = ['PHP/7.2.34', false];
        $headers['Expires'] = ['Thu, 19 Nov 1981 08:52:00 GMT', false];
        $headers['Cache-Control'] = ['no-store, no-cache, must-revalidate', false];
        $headers['Pragma'] = ['no-cache', false];
        $headers['Date'] = ['Mon, 08 May 2023 20:21:43 GMT', false];
        $headers['X-RateLimit-Limit'] = ['60', false];
        $headers['X-RateLimit-Remaining'] = ['58', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(
                TestParam::object("{\r\n  \"message\": \"usuario inativado\",\r\n  \"responseCode\": \"200\"\r\n}")
            ))
            ->assert();
    }

    public function testListaDosNiveis()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listaDosNiveis();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', false];
        $headers['Server'] = ['nginx/1.19.1', false];
        $headers['Transfer-Encoding'] = ['chunked', false];
        $headers['Connection'] = ['keep-alive', false];
        $headers['X-Powered-By'] = ['PHP/7.2.34', false];
        $headers['Expires'] = ['Thu, 19 Nov 1981 08:52:00 GMT', false];
        $headers['Cache-Control'] = ['no-store, no-cache, must-revalidate', false];
        $headers['Pragma'] = ['no-cache', false];
        $headers['Date'] = ['Wed, 10 May 2023 17:27:25 GMT', false];
        $headers['X-RateLimit-Limit'] = ['60', false];
        $headers['X-RateLimit-Remaining'] = ['58', false];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                "[\r\n  {\r\n    \"nivel\": \"1\",\r\n    \"nome\": \"Master\",\r\n    \"permis" .
                "soes\": \"1\"\r\n  },\r\n  {\r\n    \"nivel\": \"2\",\r\n    \"nome\": \"Admini" .
                "strador\",\r\n    \"permissoes\": \"1\"\r\n  },\r\n  {\r\n    \"nivel\": \"3\"," .
                "\r\n    \"nome\": \"Administrador SEO\",\r\n    \"permissoes\": \"1\"\r\n  }\r" .
                "\n]"
            )))
            ->assert();
    }
}
