# Produtosvinculofiliais

```php
$produtosvinculofiliaisController = $client->getProdutosvinculofiliaisController();
```

## Class Name

`ProdutosvinculofiliaisController`

## Methods

* [Produtos Filiais](../../doc/controllers/produtosvinculofiliais.md#produtos-filiais)
* [Produtos Filiais 1](../../doc/controllers/produtosvinculofiliais.md#produtos-filiais-1)
* [Produtos Filiais 2](../../doc/controllers/produtosvinculofiliais.md#produtos-filiais-2)


# Produtos Filiais

:information_source: **Note** This endpoint does not require authentication.

```php
function produtosFiliais(array $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProdutosFiliaisRequest[]`](../../doc/models/produtos-filiais-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = [
    ProdutosFiliaisRequestBuilder::init(
        '123',
        [
            FaturamentoBuilder::init(
                1,
                [
                    1,
                    2,
                    3
                ]
            )->build()
        ]
    )->build()
];

$produtosVinculoFiliaisController->produtosFiliais($body);
```


# Produtos Filiais 1

:information_source: **Note** This endpoint does not require authentication.

```php
function produtosFiliais1(string $sKU): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `sKU` | `string` | Template, Required | - |

## Response Type

`void`

## Example Usage

```php
$sKU = 'SKU6';

$produtosVinculoFiliaisController->produtosFiliais1($sKU);
```


# Produtos Filiais 2

:information_source: **Note** This endpoint does not require authentication.

```php
function produtosFiliais2(array $body, string $sKU): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProdutosFiliaisRequest1[]`](../../doc/models/produtos-filiais-request-1.md) | Body, Required | - |
| `sKU` | `string` | Template, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = [
    ProdutosFiliaisRequest1Builder::init(
        '123'
    )->build(),
    ProdutosFiliaisRequest1Builder::init(
        '1456'
    )->build(),
    ProdutosFiliaisRequest1Builder::init(
        '13123'
    )->build()
];

$sKU = 'SKU6';

$produtosVinculoFiliaisController->produtosFiliais2(
    $body,
    $sKU
);
```

