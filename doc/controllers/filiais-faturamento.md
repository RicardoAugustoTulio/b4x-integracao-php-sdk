# Filiais Faturamento

```php
$filiaisFaturamentoController = $client->getFiliaisFaturamentoController();
```

## Class Name

`FiliaisFaturamentoController`

## Methods

* [Cadastrar Filial](../../doc/controllers/filiais-faturamento.md#cadastrar-filial)
* [Consulta Filial](../../doc/controllers/filiais-faturamento.md#consulta-filial)
* [Deletar Filial](../../doc/controllers/filiais-faturamento.md#deletar-filial)
* [Atualizar Filial](../../doc/controllers/filiais-faturamento.md#atualizar-filial)


# Cadastrar Filial

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarFilial(CadastrarFilialRequest1 $body): CadastrarFilial
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarFilialRequest1`](../../doc/models/cadastrar-filial-request-1.md) | Body, Required | - |

## Response Type

[`CadastrarFilial`](../../doc/models/cadastrar-filial.md)

## Example Usage

```php
$body = CadastrarFilialRequest1Builder::init(
    1234,
    'teste b4c razao social alteracao',
    '123456789',
    1,
    1,
    [
        '701',
        '700'
    ]
)->build();

$result = $filiaisFaturamentoController->cadastrarFilial($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Filial cadastrada com sucesso",
  "responseCode": "201"
}
```


# Consulta Filial

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaFilial(): array
```

## Response Type

[`ConsultaFilial[]`](../../doc/models/consulta-filial.md)

## Example Usage

```php
$result = $filiaisFaturamentoController->consultaFilial();
```

## Example Response *(as JSON)*

```json
[
  {
    "codigo": "123",
    "nome": "teste b4c nome alteracao",
    "razao_social": "teste b4c razao social alteracao 2",
    "cnpj": "123456789",
    "cep": "82320270",
    "endereco": "luiz pelegrino toaldo",
    "numero": "96",
    "complemento": "casa",
    "bairro": "santa felicidade",
    "cidade": "curitiba",
    "uf": "PR",
    "fone": "4132733134",
    "fone2": "41996381828",
    "url_google_maps": "google maps",
    "url_video_youtube": "video youtube",
    "possui_estacionamento": "sim",
    "horario_atendimento": "1 a 2",
    "status": "1"
  }
]
```


# Deletar Filial

:information_source: **Note** This endpoint does not require authentication.

```php
function deletarFilial(): DeletarFilial
```

## Response Type

[`DeletarFilial`](../../doc/models/deletar-filial.md)

## Example Usage

```php
$result = $filiaisFaturamentoController->deletarFilial();
```

## Example Response *(as JSON)*

```json
{
  "message": "filial removida com sucesso",
  "responseCode": "200"
}
```


# Atualizar Filial

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarFilial(AtualizarFilialRequest1 $body): AtualizarFilial
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarFilialRequest1`](../../doc/models/atualizar-filial-request-1.md) | Body, Required | - |

## Response Type

[`AtualizarFilial`](../../doc/models/atualizar-filial.md)

## Example Usage

```php
$body = AtualizarFilialRequest1Builder::init(
    'teste b4c razao social alteracao',
    '123456789',
    1,
    2,
    [
        '701'
    ]
)->build();

$result = $filiaisFaturamentoController->atualizarFilial($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Atualizado com sucesso",
  "responseCode": "200"
}
```

