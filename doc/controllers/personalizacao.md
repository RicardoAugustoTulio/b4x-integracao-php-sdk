# Personalizacao

```php
$personalizacaoController = $client->getPersonalizacaoController();
```

## Class Name

`PersonalizacaoController`

## Methods

* [Cadastrar](../../doc/controllers/personalizacao.md#cadastrar)
* [Atualizar](../../doc/controllers/personalizacao.md#atualizar)
* [New Request](../../doc/controllers/personalizacao.md#new-request)


# Cadastrar

```php
function cadastrar(CadastrarRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarRequest`](../../doc/models/cadastrar-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = CadastrarRequestBuilder::init(
    '1',
    'SERIGRAFIA 1 COR'
)->build();

$personalizacaoController->cadastrar($body);
```


# Atualizar

```php
function atualizar(AtualizarRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarRequest`](../../doc/models/atualizar-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = AtualizarRequestBuilder::init(
    '1',
    'SERIGRAFIA 1 COR ALTERADO'
)->build();

$personalizacaoController->atualizar($body);
```


# New Request

```php
function newRequest(NewRequestRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`NewRequestRequest`](../../doc/models/new-request-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = NewRequestRequestBuilder::init(
    '1'
)->build();

$personalizacaoController->newRequest($body);
```

