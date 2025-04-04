# Boleto

```php
$boletoController = $client->getBoletoController();
```

## Class Name

`BoletoController`

## Methods

* [Boleto](../../doc/controllers/boleto.md#boleto)
* [Boleto Cpf](../../doc/controllers/boleto.md#boleto-cpf)


# Boleto

Permite listar os dados do boleto com base codigo do pedido

**`#GET /tickets/boleto/{codigo}`**

| Nome | Descrição | Inf Adicional |
| --- | --- | --- |
| codigo | codigo do pedido na plataforma. | campo obrigatório. |

```php
function boleto(string $codigo): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `codigo` | `string` | Template, Required | - |

## Response Type

[`NewRequest7[]`](../../doc/models/new-request-7.md)

## Example Usage

```php
$codigo = 'codigo4';

$result = $boletoController->boleto($codigo);
```

## Example Response *(as JSON)*

```json
[
  {
    "codigo": "325607",
    "boleto": "https://api.mundipagg.com/core/v1/transactions/tran_J1QOx55fJGSbW7oB/pdf",
    "linha_digitavel": "34191.75462 16716.561234 41234.510000 2 78350000029719"
  }
]
```


# Boleto Cpf

Permite listar os dados do boleto com base cpf do cliente

**`#GET /tickets/boleto/{cpf}`**

| Nome | Descrição | Inf Adicional |
| --- | --- | --- |
| cpf | cpf do cliente na plataforma. | campo obrigatório. |

```php
function boletoCpf(string $cpf): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cpf` | `string` | Template, Required | - |

## Response Type

[`NewRequest7[]`](../../doc/models/new-request-7.md)

## Example Usage

```php
$cpf = 'cpf0';

$result = $boletoController->boletoCpf($cpf);
```

## Example Response *(as JSON)*

```json
[
  {
    "codigo": "325607",
    "boleto": "https://api.mundipagg.com/core/v1/transactions/tran_J1QOx55fJGSbW7oB/pdf",
    "linha_digitavel": "34191.75462 16716.561234 41234.510000 2 78350000029719"
  },
  {
    "codigo": "343190",
    "boleto": "https://api.mundipagg.com/core/v1/transactions/tran_aNPLrGI0NtjoO2y8/pdf",
    "linha_digitavel": "34191.09008 00080.608615 33877.970005 9 79270000038998"
  },
  {
    "codigo": "350147",
    "boleto": "https://api.mundipagg.com/core/v1/transactions/tran_qo7MxXFBKtxLMZ9w/pdf",
    "linha_digitavel": "34191.09008 00272.278615 33877.970005 1 79700000075899"
  },
  {
    "codigo": "353455",
    "boleto": "https://api.mundipagg.com/core/v1/transactions/tran_ALBQ8xvIlaHpQKeq/pdf",
    "linha_digitavel": "34191.09008 00344.708615 33877.970005 5 79840000079897"
  }
]
```

