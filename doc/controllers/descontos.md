# Descontos

```php
$descontosController = $client->getDescontosController();
```

## Class Name

`DescontosController`

## Methods

* [Cadastrar Desconto](../../doc/controllers/descontos.md#cadastrar-desconto)
* [Cadastrar Desconto 1](../../doc/controllers/descontos.md#cadastrar-desconto-1)
* [Atualizar Desconto](../../doc/controllers/descontos.md#atualizar-desconto)
* [Deletar Desconto](../../doc/controllers/descontos.md#deletar-desconto)


# Cadastrar Desconto

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarDesconto(): void
```

## Response Type

`void`

## Example Usage

```php
$descontosController->cadastrarDesconto();
```


# Cadastrar Desconto 1

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarDesconto1(CadastrarDescontoRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarDescontoRequest`](../../doc/models/cadastrar-desconto-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = CadastrarDescontoRequestBuilder::init(
    '08113640975',
    'GOLD',
    1,
    17,
    '2024-08-07 12:15:10',
    '2024-09-06 12:15:10'
)->build();

$descontosController->cadastrarDesconto1($body);
```


# Atualizar Desconto

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarDesconto(AtualizarDescontoRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarDescontoRequest`](../../doc/models/atualizar-desconto-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = AtualizarDescontoRequestBuilder::init(
    'PLATINA',
    1,
    12,
    '2024-08-07 12:15:10',
    '2024-09-06 12:15:10'
)->build();

$descontosController->atualizarDesconto($body);
```


# Deletar Desconto

:information_source: **Note** This endpoint does not require authentication.

```php
function deletarDesconto(): void
```

## Response Type

`void`

## Example Usage

```php
$descontosController->deletarDesconto();
```

