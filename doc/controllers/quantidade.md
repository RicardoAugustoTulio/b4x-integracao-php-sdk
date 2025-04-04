# Quantidade

```php
$quantidadeController = $client->getQuantidadeController();
```

## Class Name

`QuantidadeController`

## Methods

* [Consulta Quantidade](../../doc/controllers/quantidade.md#consulta-quantidade)
* [Atualiza Quantidade](../../doc/controllers/quantidade.md#atualiza-quantidade)
* [Cadastra Brindes](../../doc/controllers/quantidade.md#cadastra-brindes)
* [Deletar Brindes](../../doc/controllers/quantidade.md#deletar-brindes)


# Consulta Quantidade

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaQuantidade(): ConsultaQuantidade
```

## Response Type

[`ConsultaQuantidade`](../../doc/models/consulta-quantidade.md)

## Example Usage

```php
$result = $quantidadeController->consultaQuantidade();
```

## Example Response *(as JSON)*

```json
{
  "campanha": {
    "id_oferta": "7",
    "campanha_brindes": "8",
    "valor_total_carrinho": "200.00",
    "quantidade_total_carrinho": "5"
  },
  "brindes": [
    {
      "campanha": "7",
      "sku": "105294",
      "nome": "Kit de Ponta Bits Sextavadas 1/4\" 061796 Robust 8 Peças"
    },
    {
      "campanha": "7",
      "sku": "123136",
      "nome": "Macaco Hidráulico Jacaré 2Ton J2301 Bovenau - Com Maleta"
    },
    {
      "campanha": "7",
      "sku": "OLD_1036",
      "nome": "Soprador Térmico 1300W 300/500°C HL1500 Steinel Comala - 127 Volts"
    },
    {
      "campanha": "7",
      "sku": "OLD_1057",
      "nome": "MARTELO BOLA 500 GR FAMASTIL"
    },
    {
      "campanha": "7",
      "sku": "158703",
      "nome": "prumo de parede de metal 500 gramas vonder 3321158500"
    },
    {
      "campanha": "7",
      "sku": "OLD_1178",
      "nome": "Lixa Folha D'Água Para Polimento Grão 1500 3M"
    }
  ]
}
```


# Atualiza Quantidade

# atualizar regra de quantidade e valor

**/brindes/quantidade/{codigo_da_oferta}**

| **nome** | **descrição** | **tipo** | **obrigatório** |
| --- | --- | --- | --- |
| valor_total_carrinho | valor em itens que o cliente deve ter no carrinho | string | nao |
| quantidade_total_carrinho | quantidade de items que o cliente deve ter no carrinho | string | nao |

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizaQuantidade(AtualizaQuantidadeRequest $body): NewRequest
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizaQuantidadeRequest`](../../doc/models/atualiza-quantidade-request.md) | Body, Required | - |

## Response Type

[`NewRequest`](../../doc/models/new-request.md)

## Example Usage

```php
$body = AtualizaQuantidadeRequestBuilder::init(
    '650',
    '2'
)->build();

$result = $quantidadeController->atualizaQuantidade($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha atualizada com sucesso",
  "responseCode": "200"
}
```


# Cadastra Brindes

# Cadastro de brindes

**/brindes/quantidade/{codigo_da_oferta}**

| **nome** | **descricao** | **tipo** | **obrigatório** |
| --- | --- | --- | --- |
| brindes | array com os produtos a serem adicionados de brinde | array | nao |
| brindes.sku | código do produto | string | sim |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraBrindes(CadastraBrindesRequest $body): NewRequest
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraBrindesRequest`](../../doc/models/cadastra-brindes-request.md) | Body, Required | - |

## Response Type

[`NewRequest`](../../doc/models/new-request.md)

## Example Usage

```php
$body = CadastraBrindesRequestBuilder::init(
    [
        Brindes1Builder::init(
            '78050'
        )->build()
    ]
)->build();

$result = $quantidadeController->cadastraBrindes($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "brindes cadastrados com sucesso",
  "responseCode": "200"
}
```


# Deletar Brindes

# Deletar brindes

**/brindes/quantidade/{codigo_da_oferta}**

| **nome** | **descricao** | **tipo** | **obrigatório** |
| --- | --- | --- | --- |
| brindes | array de brindes a ser deletado | array | nao |
| brindes.sku | código do produto | string | sim |

:information_source: **Note** This endpoint does not require authentication.

```php
function deletarBrindes(DeletarBrindesRequest $body): DeletarBrindes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeletarBrindesRequest`](../../doc/models/deletar-brindes-request.md) | Body, Required | - |

## Response Type

[`DeletarBrindes`](../../doc/models/deletar-brindes.md)

## Example Usage

```php
$body = DeletarBrindesRequestBuilder::init(
    [
        Brindes1Builder::init(
            '78050'
        )->build()
    ]
)->build();

$result = $quantidadeController->deletarBrindes($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Marcas deletadas com sucesso",
  "responseCode": "200"
}
```

