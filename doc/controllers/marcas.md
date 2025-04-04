# Marcas

## Marcas

*Todos as marcas são cadastradas no ERP e enviadas ao site. Sempre que uma nova marca é criada ou atualizado as informações devem ser integradas.*

```php
$marcasController = $client->getMarcasController();
```

## Class Name

`MarcasController`

## Methods

* [Cadastrar Marca](../../doc/controllers/marcas.md#cadastrar-marca)
* [Atualizar Marca](../../doc/controllers/marcas.md#atualizar-marca)
* [Excluir Marca](../../doc/controllers/marcas.md#excluir-marca)
* [Listar Marcas](../../doc/controllers/marcas.md#listar-marcas)
* [Consulta Marca](../../doc/controllers/marcas.md#consulta-marca)
* [Cadastra Marca](../../doc/controllers/marcas.md#cadastra-marca)
* [Deletar Marca](../../doc/controllers/marcas.md#deletar-marca)


# Cadastrar Marca

\*\`#POST /marca

**Requisição**

\*Body

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| codigo | codigo da marca | string | sim |
| descricao | nome da marca | string | sim |

**\*Exemplo

```json
     {
         "codigo":"01",
        "descricao":"Marca  Teste",
     }

```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 201 | id da marca gerada | mensagem | {"marca cadastrada com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"a marca já está cadastrada"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](https://mailto:suporte@b4commerce.com.br)"} |

```json
     {
         "id":1,
         "mensagem":"Marca cadastrada com sucesso"
     }

```

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarMarca(CadastrarMarcaRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarMarcaRequest`](../../doc/models/cadastrar-marca-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = CadastrarMarcaRequestBuilder::init(
    '151515',
    'Marca Teste'
)->build();

$marcasController->cadastrarMarca($body);
```


# Atualizar Marca

`_#PUT /marca/{id}_`

\*Requisição

Parâmetros da Url

| Nome | Descrição | Tipo | Obrigatório |
| --- | --- | --- | --- |
| codigo | codigo da Marca | int | Sim |

_Body_

| nome | descricao | tipo |
| --- | --- | --- |
| descricao | nome da marca | string |
| status | status da marca | bit |

_Exemplo_

```json
         {
            "descricao:"Marca Teste",
           "status": 1
         }

```

_Resposta_

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 200 | marca alterada com Sucesso | mensagem | {"marca atualizada com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"marca nao encontrada"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](https://mailto:suporte@b4commerce.com.br) "} |

```json
        {
           "mensagem": "marca alterada com sucesso"
        }

```

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarMarca(AtualizarMarcaRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarMarcaRequest`](../../doc/models/atualizar-marca-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = AtualizarMarcaRequestBuilder::init(
    'Marca Teste alterado',
    1
)->build();

$marcasController->atualizarMarca($body);
```


# Excluir Marca

### Remover Marcas

> Não é possível excluir subcategorias vinculadas a produtos
> *`#DELETE/marca/{id}`*

**Requisição
**Parâmetros da Url

| Nome | Descrição | Tipo  | Obrigatório|
|------------|---------|---------------|-----------------|
| codigo | codigo da marca | int | Sim |

*Body
N/A

*Resposta*

| HTTP Status Code | Descricao | Resposta | json |
|------|-----------|----------|------------- |
| 200 | marca removida com Sucesso | mensagem | {"marca removida com sucesso"}|
| 4xx | Requisição inválida | mensagem | {"marca nao encontrada"}|
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br "} |

```json
	
        {
    	  
           "mensagem": "Marca removida com sucesso"
    	}
```

:information_source: **Note** This endpoint does not require authentication.

```php
function excluirMarca(): void
```

## Response Type

`void`

## Example Usage

```php
$marcasController->excluirMarca();
```


# Listar Marcas

###Listar Marcass

*`GET /marca/?={Offest}&Limit={Limit}`*

**Retorna todas as categorias do fornecedor
**Requisição
**Parâmetros da Url

| Nome | Descrição | Tipo  | Inf Adicional |
|------------|---------|----------------|----------------|
| Offset | Ignora os primeiros { Offset } itens | Integer | |
| Limit | Define a quantidade de registros | Integer | 200 registros |

**Requisição
**Parâmetros da Url
*`#GET /marca/{codigo}`*
**Retorna informações sobre uma marca cadastrada

| Nome | Descrição | Tipo  | Obrigatório|
|------------|---------|------------------|--------------|
| codigo | código da marca | string | Sim |

*Resposta*

| nome | descricao | tipo |
|------|-----------|------|
| codigo | codigo da marca | string |
| descricao | nome da marca | string |
| status | status da marca | bit |

*Output*

```json
{
	"marcas": [{
	    "codigo":"1",
		"descricao":"Marca Teste",
		"status": 1
	}]
}
```

:information_source: **Note** This endpoint does not require authentication.

```php
function listarMarcas(): void
```

## Response Type

`void`

## Example Usage

```php
$marcasController->listarMarcas();
```


# Consulta Marca

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaMarca(): ConsultaMarca
```

## Response Type

[`ConsultaMarca`](../../doc/models/consulta-marca.md)

## Example Usage

```php
$result = $marcasController->consultaMarca();
```

## Example Response *(as JSON)*

```json
{
  "marcas": [
    {
      "campanha": "9",
      "nome": "ALBRAS",
      "quantidade": "3.00"
    }
  ],
  "brindes": [
    {
      "campanha": "9",
      "sku": "OLD_1003",
      "nome": "Furadeira de impacto 1/2' 600 watts 220v velocidade variável e reversível DV16VSSxb hitachi"
    }
  ]
}
```


# Cadastra Marca

# Cadastro de marcas e seus brindes - será vinculado as ofertas

**/brindes/marcas/{codigo_da_oferta}**

| **nome** | **descrição** | **tipo** | **obrigatório** |
| --- | --- | --- | --- |
| tipo | tipo de regra a ser considerada no brinde | int | sim |
| valorTotal | valor total do carrinho caso o tipo seja igual a 1 | string | obrigatório caso o tipo seja igual a 1 |
| marcas | array das marcas a serem adicionadas | array | sim |
| marcas.id | código da marca | string | sim |
| marcas.quantidade | quantidade para regra da marca, caso o tipo seja 1 a quantidade é desconsiderada | string | sim |
| brindes | array com os produtos a serem adicionados de brinde | array | nao |
| brindes.sku | código do produto | string | sim |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraMarca(CadastraMarcaRequest $body): NewRequest
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraMarcaRequest`](../../doc/models/cadastra-marca-request.md) | Body, Required | - |

## Response Type

[`NewRequest`](../../doc/models/new-request.md)

## Example Usage

```php
$body = CadastraMarcaRequestBuilder::init(
    1,
    '20',
    [
        Marca1Builder::init(
            '2',
            '5'
        )->build(),
        Marca1Builder::init(
            '13',
            '1'
        )->build()
    ],
    [
        Brindes1Builder::init(
            '123123'
        )->build()
    ]
)->build();

$result = $marcasController->cadastraMarca($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "marcas cadastradas com sucesso",
  "responseCode": "200"
}
```


# Deletar Marca

# Deletar marcas e seus brindes

**/brindes/marcas/{codigo_da_oferta}**

| **nome** | **descrição** | **tipo** | **obrigatório** |
| --- | --- | --- | --- |
| marcas | array de marcas a ser deletado | array | nao |
| marcas.id | código da marca | string | sim |
| brindes | array de brindes a ser deletado | array | nao |
| brindes.sku | código do produto | string | sim |

:information_source: **Note** This endpoint does not require authentication.

```php
function deletarMarca(DeletarMarcaRequest $body): NewRequest
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeletarMarcaRequest`](../../doc/models/deletar-marca-request.md) | Body, Required | - |

## Response Type

[`NewRequest`](../../doc/models/new-request.md)

## Example Usage

```php
$body = DeletarMarcaRequestBuilder::init(
    [
        Marca2Builder::init(
            13
        )->build(),
        Marca2Builder::init(
            12
        )->build(),
        Marca2Builder::init(
            2
        )->build()
    ],
    [
        ApiHelper::deserialize('{}')
    ]
)->build();

$result = $marcasController->deletarMarca($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Marcas deletadas com sucesso",
  "responseCode": "200"
}
```

