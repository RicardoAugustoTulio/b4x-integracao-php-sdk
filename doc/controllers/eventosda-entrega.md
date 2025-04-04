# Eventosda Entrega

```php
$eventosdaEntregaController = $client->getEventosdaEntregaController();
```

## Class Name

`EventosdaEntregaController`

## Methods

* [Envia Eventos Da Entrega](../../doc/controllers/eventosda-entrega.md#envia-eventos-da-entrega)
* [Lista Os Eventos Da Entrega](../../doc/controllers/eventosda-entrega.md#lista-os-eventos-da-entrega)


# Envia Eventos Da Entrega

`POST /pedidos/{codigo_pedido}/entregas/{codigo_entrega}/eventos/`

Adiciona uma novo evento a entrega

Parâmetros da Url

`POST /pedidos/{codigo_pedido}/entregas/{codigo_entrega}/notas_fiscais/`

| Nome | Descrição | Tipo | Obrigatório |
| --- | --- | --- | --- |
| codigo_pedido | codigo do pedido no lojista | int | Sim |
| codigo_entrega | codigo da entrega | int | Sim |

_body_

| nome | descricao | tipo | Obrigatório |
| --- | --- | --- | --- |
| status | situacao da entrega | string | sim |
| data | data do acontecimento | datetime | nao |

_Exemplo_

```json
{
    "status": "separacao",
    "data": "2022-08-24 23:52:23"
}

```

_Resposta_

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 201 | Evento cadastrado Sucesso | mensagem | {"evento cadastrado com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"entregao não encontrada"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](https://mailto:suporte@b4commerce.com.br) "} |

:information_source: **Note** This endpoint does not require authentication.

```php
function enviaEventosDaEntrega(EnviaEventosDaEntregaRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`EnviaEventosDaEntregaRequest`](../../doc/models/envia-eventos-da-entrega-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = EnviaEventosDaEntregaRequestBuilder::init(
    'entregue',
    '2022-08-24 23:52:23'
)->build();

$eventosDaEntregaController->enviaEventosDaEntrega($body);
```


# Lista Os Eventos Da Entrega

Lista os eventos cadastrados da Entrega

**`GET /pedidos/{codigo_pedido}/entregas/{codigo_entrega}/eventos/`**

Retorna todas as notas cadastradas no pedido

*Parâmetros da Url*

| Nome | Descrição | Tipo  | Obrigatório|
|------------|---------|---------------|-----------------|
| codigo_pedido | codigo do pedido no lojista | int | Sim |
| codigo_entrega | codigo da entrega | int | Sim |

*Resposta*

| nome | descricao | tipo |
|------|-----------|------|
| data | data da inclusão na NF | Datetime |
| status | código do status | int |
| descricap | descrição do status | string |

*Output*

```json
{
  "eventos": [
      {
          "data": "2020-02-13 14:19:34",
          "status": "4",
          "descricao": "Na Separação"
      },
      {
          "data": "2020-02-13 14:59:34",
          "status": "13",
          "descricao": "Nota Fiscal Emitida"
      }
  ]
}
```

:information_source: **Note** This endpoint does not require authentication.

```php
function listaOsEventosDaEntrega(string $codigoPedido, string $codigoEntrega): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `codigoPedido` | `string` | Template, Required | - |
| `codigoEntrega` | `string` | Template, Required | - |

## Response Type

`void`

## Example Usage

```php
$codigoPedido = 'codigo_pedido6';

$codigoEntrega = 'codigo_entrega0';

$eventosDaEntregaController->listaOsEventosDaEntrega(
    $codigoPedido,
    $codigoEntrega
);
```

