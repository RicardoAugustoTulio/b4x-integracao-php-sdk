# Oferta

```php
$ofertaController = $client->getOfertaController();
```

## Class Name

`OfertaController`

## Methods

* [Cadastra Oferta](../../doc/controllers/oferta.md#cadastra-oferta)
* [Consulta Oferta](../../doc/controllers/oferta.md#consulta-oferta)
* [Inativar Oferta](../../doc/controllers/oferta.md#inativar-oferta)
* [Atualizar Oferta](../../doc/controllers/oferta.md#atualizar-oferta)


# Cadastra Oferta

# Tabela base para controlar a quantidade de brindes e com esse ID que sera vinculado os produtos e brindes

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| id_campanha_brindes | codigo da campanha cadastrada com os vencimentos | int | sim |
| id_oferta | codigo da oferta |  int | sim |
| nomeBrinde | nome para controle interno  | string | sim |
| qtdeBrindes | quantidade máxima de brindes que o cliente vai poder escolher | integer | sim |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraOferta(CadastraOfertaRequest $body): CadastraOferta
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraOfertaRequest`](../../doc/models/cadastra-oferta-request.md) | Body, Required | - |

## Response Type

[`CadastraOferta`](../../doc/models/cadastra-oferta.md)

## Example Usage

```php
$body = CadastraOfertaRequestBuilder::init(
    '20',
    '30',
    'teste API oferta',
    '1'
)->build();

$result = $ofertaController->cadastraOferta($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha cadastrada com sucesso",
  "responseCode": "200"
}
```


# Consulta Oferta

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaOferta(): ConsultaOferta
```

## Response Type

[`ConsultaOferta`](../../doc/models/consulta-oferta.md)

## Example Usage

```php
$result = $ofertaController->consultaOferta();
```

## Example Response *(as JSON)*

```json
{
  "id_oferta": "30",
  "campanha_brindes": "20",
  "status_brindes_oferta": "1",
  "valorTotal": "0.00",
  "qtdeBrindes": "1",
  "tipoValor": "0",
  "nomeBrinde": "teste API oferta",
  "quantidade_total_carrinho": "0",
  "valor_total_carrinho": "0.00"
}
```


# Inativar Oferta

:information_source: **Note** This endpoint does not require authentication.

```php
function inativarOferta(): InativarOferta
```

## Response Type

[`InativarOferta`](../../doc/models/inativar-oferta.md)

## Example Usage

```php
$result = $ofertaController->inativarOferta();
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha desativada com sucesso",
  "responseCode": "200"
}
```


# Atualizar Oferta

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| nomeBrinde | nome para controle interno  | string | nao |
| qtdeBrindes | quantidade máxima de brindes que o cliente vai poder escolher | int | nao |
| status_brindes_oferta | status da oferta. 0 = inativa, 1 = ativa | int | nao |

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarOferta(AtualizarOfertaRequest $body): AtualizarOferta
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarOfertaRequest`](../../doc/models/atualizar-oferta-request.md) | Body, Required | - |

## Response Type

[`AtualizarOferta`](../../doc/models/atualizar-oferta.md)

## Example Usage

```php
$body = AtualizarOfertaRequestBuilder::init(
    'teste API oferta EDITADA',
    '2',
    1
)->build();

$result = $ofertaController->atualizarOferta($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha atualizada com sucesso",
  "responseCode": "200"
}
```

