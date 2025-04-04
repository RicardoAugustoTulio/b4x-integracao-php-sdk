# Observações Pedidos

```php
$observaEsPedidosController = $client->getObservaEsPedidosController();
```

## Class Name

`ObservaEsPedidosController`


# Atualizar Observação

```php
function atualizarObservaO(AtualizarObservaORequest $body): NewRequest
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarObservaORequest`](../../doc/models/atualizar-observa-o-request.md) | Body, Required | - |

## Response Type

[`NewRequest`](../../doc/models/new-request.md)

## Example Usage

```php
$body = AtualizarObservaORequestBuilder::init(
    'testando observacao api put 1'
)->build();

$result = $observaEsPedidosController->atualizarObservaO($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Observacao atualizada com sucesso",
  "responseCode": "201"
}
```

