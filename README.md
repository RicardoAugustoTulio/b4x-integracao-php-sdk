
# Getting Started with Api B4C

## Introduction

### Api B4C x ERP

Documentação da API Rest para possibilitar a integração completa com a loja.

*Versão Atual: [v1.0][dist]*

#### Ambientes (produção e sandbox)

A url de acesso a API é a mesma para os dois ambientes, a identificação  do tipo de acesso se dará pelo login e senha.

{{URL_API_B4C}}

#### Autenticação e Padrões

***Autenticação  
A API utiliza o padrão “HTTP Basic Authentication”, que consiste em enviar o cabeçalho Authorization com um valor no form
Importante: O cabeçalho de autenticação deve ser informado em todas as requisições enviadas para a API.

###Padrões

Toda as trocas de informações com a API, deve utilizar o padrão JSON (JavaScript Object Notation). Por isso, cada requisi

`#Headers do formato de dados`  
`Accept: application/json`  
`Content-Type: application/json`

###Encoding (charset)

Os dados enviados (via POST ou PUT) devem estar de acordo com o charset UTF-8.

Caso seja utilizado um encoding diferente, será retornado um erro de tipo de dados não suportados (HTTP Status 415).

[IMPORTANTE] - Mesmo que o header "Accept" indique o uso do charset UTF-8, se os dados do body não estiverem no encoding

#### Códigos de Retorno (http status)

##### A Api utiliza o HTTP status code para a resposta de toda requisição.

| Código | Descricao |  
|------|-----------|  
| 200 | Sucesso |  
| 201 | Criado |  
| 400 | Requisição inválida |  
| 401 | Credenciais  inválidas |  
| 403 | Permissão negada ao recurso |  
| 404 | A URL solicitada ou o recurso não existe |  
| 405 | Método não permitido para o recurso |  
| 409 | O recurso que está sendo criado já existe |  
| 500 | Erro desconhecido. Por favor informe para o email suporte@b4commerce.com.br sobre o problema. |

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "ricardo-tulio-b4x/b4x-integracao-php-sdk:1.0.1"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "ricardo-tulio-b4x/b4x-integracao-php-sdk": "1.0.1"
}
```

You can also view the package at:
https://packagist.org/packages/ricardo-tulio-b4x/b4x-integracao-php-sdk#1.0.1

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `basicAuthCredentials` | [`BasicAuthCredentials`](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/auth/basic-authentication.md) | The Credentials Setter for Basic Authentication |

The API client can be initialized as follows:

```php
$client = ApiB4CClientBuilder::init()
    ->basicAuthCredentials(
        BasicAuthCredentialsBuilder::init(
            'username',
            'password'
        )
    )
    ->environment(Environment::PRODUCTION)
    ->build();
```

## Authorization

This API uses the following authentication schemes.

* [`basic (Basic Authentication)`](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/auth/basic-authentication.md)

## List of APIs

* [Entregasdo Pedido](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/entregasdo-pedido.md)
* [Eventosda Entrega](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/eventosda-entrega.md)
* [Eventos Pedidos](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/eventos-pedidos.md)
* [Nf Pedidos](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/nf-pedidos.md)
* [Filiais Faturamento](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/filiais-faturamento.md)
* [Produtosvinculofiliais](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/produtosvinculofiliais.md)
* [Observações Pedidos](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/observações-pedidos.md)
* [Categorias](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/categorias.md)
* [Marcas](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/marcas.md)
* [Produtos](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/produtos.md)
* [Pedidos](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/pedidos.md)
* [Campanha](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/campanha.md)
* [Oferta](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/oferta.md)
* [Quantidade](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/quantidade.md)
* [Preços](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/preços.md)
* [Filiais](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/filiais.md)
* [Usuarios](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/usuarios.md)
* [Endereco](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/endereco.md)
* [Descontos](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/descontos.md)
* [Clientes](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/clientes.md)
* [Boleto](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/boleto.md)
* [Pix](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/pix.md)
* [Tickets](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/tickets.md)
* [Personalizacao](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/controllers/personalizacao.md)

## Classes Documentation

* [ApiException](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/api-exception.md)
* [HttpRequest](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/http-request.md)
* [HttpResponse](https://www.github.com/RicardoAugustoTulio/b4x-integracao-php-sdk/tree/1.0.1/doc/http-response.md)

