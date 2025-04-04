# Tickets

```php
$ticketsController = $client->getTicketsController();
```

## Class Name

`TicketsController`

## Methods

* [Cliente](../../doc/controllers/tickets.md#cliente)
* [Status Pedidos](../../doc/controllers/tickets.md#status-pedidos)
* [Tracking](../../doc/controllers/tickets.md#tracking)


# Cliente

Permite listar os dados do cliente com base no cpf do cliente

**`#GET /tickets/cliente/{cpf}`**

| Nome | Descrição | Inf Adicional |
| --- | --- | --- |
| cpf | cpf do cliente na plataforma. | campo obrigatório. |

```php
function cliente(string $cpf): NewRequest11
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cpf` | `string` | Template, Required | - |

## Response Type

[`NewRequest11`](../../doc/models/new-request-11.md)

## Example Usage

```php
$cpf = 'cpf0';

$result = $ticketsController->cliente($cpf);
```

## Example Response *(as JSON)*

```json
{
  "nome": "Gustavo Cardoso",
  "tipo": 1,
  "cpf_cnpj": "************"
}
```


# Status Pedidos

Permite listar o status atual do pedido.

**`#GET /tickets/status/{codigo}`**

| Nome | Descrição | Inf Adicional |
| --- | --- | --- |
| codigo | codigo do pedido na plataforma. | campo obrigatório. |

```php
function statusPedidos(string $codigo): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `codigo` | `string` | Template, Required | - |

## Response Type

[`StatusPedido[]`](../../doc/models/status-pedido.md)

## Example Usage

```php
$codigo = 'codigo4';

$result = $ticketsController->statusPedidos($codigo);
```

## Example Response *(as JSON)*

```json
[
  {
    "codigo": "13",
    "status": "NOTA FISCAL EMITIDA"
  }
]
```


# Tracking

```php
function tracking(string $codigo): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `codigo` | `string` | Template, Required | - |

## Response Type

`void`

## Example Usage

```php
$codigo = 'codigo4';

$ticketsController->tracking($codigo);
```

