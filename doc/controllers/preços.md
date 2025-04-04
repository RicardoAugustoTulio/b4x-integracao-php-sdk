# Preços

```php
$preOsController = $client->getPreOsController();
```

## Class Name

`PreOsController`

## Methods

* [Consulta Preco](../../doc/controllers/preços.md#consulta-preco)
* [Cadastra Preco](../../doc/controllers/preços.md#cadastra-preco)
* [Deletar Preco](../../doc/controllers/preços.md#deletar-preco)


# Consulta Preco

```json
[
    {
        "id_oferta": 18724734,
        "status_campanha_oferta": 1,
        "campanha_oferta": 1,
        "agrupamento_campanha_oferta": 0,
        "tipo_oferta_desconto": 3,
        "valor_oferta": 19.99,
        "produto_oferta_desconto": 23,
        "prioridade_atualizacao_oferta": "nao",
        "created_at": null,
        "updated_at": "2019-02-26 13:44:43",
        "regra_ativacao_valor": 0,
        "preco_atacado": null
    },
    {
        "id_oferta": 19078292,
        "status_campanha_oferta": 1,
        "campanha_oferta": 149,
        "agrupamento_campanha_oferta": 0,
        "tipo_oferta_desconto": 3,
        "valor_oferta": 18.62,
        "produto_oferta_desconto": 23,
        "prioridade_atualizacao_oferta": "nao",
        "created_at": null,
        "updated_at": "0000-00-00 00:00:00",
        "regra_ativacao_valor": 0,
        "preco_atacado": null
    },
    {
        "id_oferta": 18782023,
        "status_campanha_oferta": 1,
        "campanha_oferta": 164,
        "agrupamento_campanha_oferta": 0,
        "tipo_oferta_desconto": 3,
        "valor_oferta": 17.88,
        "produto_oferta_desconto": 23,
        "prioridade_atualizacao_oferta": "nao",
        "created_at": null,
        "updated_at": "0000-00-00 00:00:00",
        "regra_ativacao_valor": 0,
        "preco_atacado": null
    },
    {
        "id_oferta": 24418127,
        "status_campanha_oferta": 1,
        "campanha_oferta": 594,
        "agrupamento_campanha_oferta": null,
        "tipo_oferta_desconto": 3,
        "valor_oferta": 16.46,
        "produto_oferta_desconto": 23,
        "prioridade_atualizacao_oferta": null,
        "created_at": null,
        "updated_at": null,
        "regra_ativacao_valor": 0,
        "preco_atacado": null
    },
    {
        "id_oferta": 24408264,
        "status_campanha_oferta": 1,
        "campanha_oferta": 596,
        "agrupamento_campanha_oferta": null,
        "tipo_oferta_desconto": 3,
        "valor_oferta": 16.46,
        "produto_oferta_desconto": 23,
        "prioridade_atualizacao_oferta": null,
        "created_at": null,
        "updated_at": null,
        "regra_ativacao_valor": 0,
        "preco_atacado": null
    },
    {
        "id_oferta": 25092310,
        "status_campanha_oferta": 1,
        "campanha_oferta": 2000,
        "agrupamento_campanha_oferta": 0,
        "tipo_oferta_desconto": 0,
        "valor_oferta": 180,
        "produto_oferta_desconto": 23,
        "prioridade_atualizacao_oferta": 1,
        "created_at": "2020-09-02 16:02:40",
        "updated_at": "2020-09-02 16:05:55",
        "regra_ativacao_valor": 1,
        "preco_atacado": null
    }
]
```

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaPreco(): array
```

## Response Type

[`ConsultaPreco[]`](../../doc/models/consulta-preco.md)

## Example Usage

```php
$result = $preOsController->consultaPreco();
```


# Cadastra Preco

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraPreco(CadastraPrecoRequest $body): CadastraPreco1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraPrecoRequest`](../../doc/models/cadastra-preco-request.md) | Body, Required | - |

## Response Type

[`CadastraPreco1`](../../doc/models/cadastra-preco-1.md)

## Example Usage

```php
$body = CadastraPrecoRequestBuilder::init(
    2003,
    220
)->build();

$result = $preOsController->cadastraPreco($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha cadastrada com sucesso",
  "responseCode": "200"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Bad Request | [`CadastraPrecoException`](../../doc/models/cadastra-preco-exception.md) |


# Deletar Preco

:information_source: **Note** This endpoint does not require authentication.

```php
function deletarPreco(DeletarPrecoRequest $body): CadastraPreco1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeletarPrecoRequest`](../../doc/models/deletar-preco-request.md) | Body, Required | - |

## Response Type

[`CadastraPreco1`](../../doc/models/cadastra-preco-1.md)

## Example Usage

```php
$body = DeletarPrecoRequestBuilder::init(
    2001
)->build();

$result = $preOsController->deletarPreco($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha cadastrada com sucesso",
  "responseCode": "200"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Bad Request | [`DeletarPrecoException`](../../doc/models/deletar-preco-exception.md) |

