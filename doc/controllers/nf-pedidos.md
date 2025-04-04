# Nf Pedidos

```php
$nfPedidosController = $client->getNfPedidosController();
```

## Class Name

`NfPedidosController`

## Methods

* [Envia NF Pedido](../../doc/controllers/nf-pedidos.md#envia-nf-pedido)
* [Deleta NF Pedido](../../doc/controllers/nf-pedidos.md#deleta-nf-pedido)
* [Consultar NF Pedido](../../doc/controllers/nf-pedidos.md#consultar-nf-pedido)


# Envia NF Pedido

:information_source: **Note** This endpoint does not require authentication.

```php
function enviaNFPedido(EnviaNFPedidoRequest $body): EnviaNFPedido
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`EnviaNFPedidoRequest`](../../doc/models/envia-nf-pedido-request.md) | Body, Required | - |

## Response Type

[`EnviaNFPedido`](../../doc/models/envia-nf-pedido.md)

## Example Usage

```php
$body = EnviaNFPedidoRequestBuilder::init(
    '',
    '1500',
    '41200900915086000263550040000149881885575321',
    ''
)->build();

$result = $nfPedidosController->enviaNFPedido($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Nota fiscal inserida com sucesso",
  "responseCode": "201"
}
```


# Deleta NF Pedido

:information_source: **Note** This endpoint does not require authentication.

```php
function deletaNFPedido(DeletaNFPedidoRequest $body): DeletaNFPedido
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeletaNFPedidoRequest`](../../doc/models/deleta-nf-pedido-request.md) | Body, Required | - |

## Response Type

[`DeletaNFPedido`](../../doc/models/deleta-nf-pedido.md)

## Example Usage

```php
$body = DeletaNFPedidoRequestBuilder::init(
    '',
    '1500'
)->build();

$result = $nfPedidosController->deletaNFPedido($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Nota fiscal removida com sucesso",
  "responseCode": "200"
}
```


# Consultar NF Pedido

:information_source: **Note** This endpoint does not require authentication.

```php
function consultarNFPedido(): ConsultarNFPedido
```

## Response Type

[`ConsultarNFPedido`](../../doc/models/consultar-nf-pedido.md)

## Example Usage

```php
$result = $nfPedidosController->consultarNFPedido();
```

## Example Response *(as JSON)*

```json
{
  "notas_fiscais": [
    {
      "data": "2020-09-29 16:36:57",
      "tipo": "",
      "numero": "1500",
      "chave": "41200900915086000263550040000149881885575321",
      "xml": "",
      "codigo_fornecedor": "0",
      "url_download": ""
    }
  ]
}
```

