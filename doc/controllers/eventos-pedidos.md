# Eventos Pedidos

```php
$eventosPedidosController = $client->getEventosPedidosController();
```

## Class Name

`EventosPedidosController`

## Methods

* [Envia Eventos Do Pedido](../../doc/controllers/eventos-pedidos.md#envia-eventos-do-pedido)
* [Lista Os Eventos Do Pedido](../../doc/controllers/eventos-pedidos.md#lista-os-eventos-do-pedido)


# Envia Eventos Do Pedido

TABELA DE STATUS

| status | descricao |
| --- | --- |
| nao-iniciada | pedido parado |
| separacao | pedido em processo de separação |
| nota-fiscal-emitida | emissão da nota fiscal |
| aguardando-coleta | aguardando coleta |
| cancelada | pedido cancelado |
| transporte | pedido com processo de transporte iniciado |
| entregue | pedido entregue |
| integrado | status para notificar que o pedido foi integrado com sucesso |
| integrado-com-erro | status para notificar que foi integrado porém com erro nos dados integrados |
| disponivel-para-retirada | pedido disponível para retirada |

:information_source: **Note** This endpoint does not require authentication.

```php
function enviaEventosDoPedido(EnviaEventosDoPedidoRequest $body): EnviaEventosDoPedido
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`EnviaEventosDoPedidoRequest`](../../doc/models/envia-eventos-do-pedido-request.md) | Body, Required | - |

## Response Type

[`EnviaEventosDoPedido`](../../doc/models/envia-eventos-do-pedido.md)

## Example Usage

```php
$body = EnviaEventosDoPedidoRequestBuilder::init(
    'nota-fiscal-emitida',
    'nota emitida manualmente'
)->build();

$result = $eventosPedidosController->enviaEventosDoPedido($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Evento cadastrado com sucesso",
  "responseCode": "201"
}
```


# Lista Os Eventos Do Pedido

:information_source: **Note** This endpoint does not require authentication.

```php
function listaOsEventosDoPedido(): ListaOsEventosDoPedido
```

## Response Type

[`ListaOsEventosDoPedido`](../../doc/models/lista-os-eventos-do-pedido.md)

## Example Usage

```php
$result = $eventosPedidosController->listaOsEventosDoPedido();
```

## Example Response *(as JSON)*

```json
{
  "eventos": [
    {
      "data": "2020-09-28 15:47:16",
      "status": "1",
      "descricao": "O pagamento não foi finalizado"
    },
    {
      "data": "2020-09-28 15:47:17",
      "status": "2",
      "descricao": "Aguardando Pagamento"
    },
    {
      "data": "2020-09-29 16:21:35",
      "status": "4",
      "descricao": "Na Expedição"
    }
  ]
}
```

