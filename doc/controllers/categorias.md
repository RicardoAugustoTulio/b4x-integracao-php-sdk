# Categorias

*Todos as categorias são cadastrados no ERP e enviados ao site. Sempre que uma nova categoria é criada ou atualizado as informações devem ser integradas.

> Api só aceitará a inclusão/alteração de categorias filhas de categorias de pais já cadastradas

```php
$categoriasController = $client->getCategoriasController();
```

## Class Name

`CategoriasController`

## Methods

* [Cadastrar Categoria](../../doc/controllers/categorias.md#cadastrar-categoria)
* [Atualizar Categoria](../../doc/controllers/categorias.md#atualizar-categoria)
* [Excluir Categoria](../../doc/controllers/categorias.md#excluir-categoria)
* [Listar a Categorias Cadastradas](../../doc/controllers/categorias.md#listar-a-categorias-cadastradas)
* [Consulta Categorias](../../doc/controllers/categorias.md#consulta-categorias)
* [Cadastra Categorias](../../doc/controllers/categorias.md#cadastra-categorias)
* [Deletar Categorias](../../doc/controllers/categorias.md#deletar-categorias)


# Cadastrar Categoria

###Adicionar categoria

*`#POST /categoria`*

**Requisição**

*Body

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| codigo | codigo da categoria | string | sim |
| descricao | nome da categoria |  string | sim |
| codigo_pai |  código  da categoria  pai  | string | sim |

***Exemplo

```json
    {
		"codigo":"1",
        "descricao":"Categoria Teste",
        "codigo_pai": "99"
	}
```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
|------|-----------|----------|------------- |
| 201| categoria cadastrada com sucesso | mensagem | {"categoria cadastrada com sucesso"}|
| 4xx | Requisição inválida | mensagem | {"a categoria já está cadastrada"} |
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br"} |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarCategoria(CadastrarCategoriaRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarCategoriaRequest`](../../doc/models/cadastrar-categoria-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = CadastrarCategoriaRequestBuilder::init(
    '1002',
    'B4C sUBCategoria',
    '1001'
)->build();

$categoriasController->cadastrarCategoria($body);
```


# Atualizar Categoria

###Alterar Categoria 	
*`#PUT /categoria/{codigo}`*

*Requisição

Parâmetros da Url

| Nome | Descrição | Tipo  | Obrigatório|
|------------|---------|--------------|------------------|
| codigo | código da categoria | string | Sim |

*Body*

| nome | descricao | tipo |
|------|-----------|------|
| descricao | nome da categoria |  string |
| codigo_pai | código  do categoria  pai | string |

*Exemplo*

```json
	
        {
    	   "descricao":"Categoria Teste Alterada",
           "codigo_pai": "99"
    	}
```

*Resposta*

| HTTP Status Code | Descricao | Resposta | json |
|------|-----------|----------|------------- |
| 200 | categoria alterada com Sucesso | mensagem | {"categoria atualizada com sucesso"}|
| 4xx | Requisição inválida | mensagem | {"categoria nao encontrada"}|
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br "} |

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarCategoria(AtualizarCategoriaRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarCategoriaRequest`](../../doc/models/atualizar-categoria-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = AtualizarCategoriaRequestBuilder::init(
    'Catgoria Teste',
    '16'
)->build();

$categoriasController->atualizarCategoria($body);
```


# Excluir Categoria

### Remover Categoria

> Não é possível excluir categorias com filhos e /ou vinculadas a produtos

*`#DELETE/categoria/{codigo}`*

**Requisição
**Parâmetros da Url

| Nome | Descrição | Tipo  | Obrigatório|
|------------|---------|---------------|----------------|
| codigo | código da categoria  | string | Sim |

*Body
N/A

*Resposta*

| HTTP Status Code | Descricao | Resposta | json |
|------|-----------|----------|------------- |
| 200 | Categoria removida com Sucesso | mensagem | {"Categoria atualizada com sucesso"}|
| 4xx | Requisição inválida | mensagem | {"Categoria nao encontrada"}|
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br "} |

:information_source: **Note** This endpoint does not require authentication.

```php
function excluirCategoria(): void
```

## Response Type

`void`

## Example Usage

```php
$categoriasController->excluirCategoria();
```


# Listar a Categorias Cadastradas

*`GET /categoria/?offest={Offest}&Limit={Limit}`*

**Retorna todas as categorias do fornecedor
**Requisição
**Parâmetros da Url

| Nome | Descrição | Tipo  | Inf Adicional |
|------------|---------|---------------|-----------------|
| Offset | Ignora os primeiros { Offset } itens | Integer | |
| Limit | Define a quantidade de registros | Integer | 200 registros |

**Requisição
**Parâmetros da Url
*`#GET /categoria/{codigo}`*
**Retorna informações sobre um produto cadastrado

| Nome | Descrição | Tipo  | Obrigatório|
|------------|---------|----------------|----------------|
| codigo | código da categoria do fornecedor | string | Sim |

*Resposta*

| nome | descricao | tipo |
|------|-----------|------|
| codigo | codigo da categoria | string |
| nome | nome da categoria |  string |
| codigo_pai | código  da categoria  pai | string |

*Output*

```json
{
	"categorias": [{
	    "codigo_pai": "999",
		"codigo":"1",
		"descricao":"Categoria Teste"					
		
	}]
}
```

:information_source: **Note** This endpoint does not require authentication.

```php
function listarACategoriasCadastradas(): void
```

## Response Type

`void`

## Example Usage

```php
$categoriasController->listarACategoriasCadastradas();
```


# Consulta Categorias

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaCategorias(): ConsultaCategorias
```

## Response Type

[`ConsultaCategorias`](../../doc/models/consulta-categorias.md)

## Example Usage

```php
$result = $categoriasController->consultaCategorias();
```

## Example Response *(as JSON)*

```json
{
  "categorias": [
    {
      "campanha": "6",
      "nome": "Abraçadeiras",
      "quantidade": "0"
    }
  ],
  "brindes": [
    {
      "campanha": "6",
      "sku": "123136",
      "nome": "Macaco Hidráulico Jacaré 2Ton J2301 Bovenau - Com Maleta"
    },
    {
      "campanha": "6",
      "sku": "137498",
      "nome": "VULCANIZADORA PARA CÂMARAS DE AUTOMÓVEIS/CAMINHÕES 110V V300C EMEB"
    },
    {
      "campanha": "6",
      "sku": "OLD_1007",
      "nome": "TORQUES ARMADOR 12\" FAMASTIL"
    }
  ]
}
```


# Cadastra Categorias

# Cadastro de categorias e seus brindes - será vinculado as ofertas

**/brindes/categorias/{codigo_da_oferta}**

| nome | descrição | **tipo** | **obrigatório** |
| --- | --- | --- | --- |
| tipo | tipo de regra a ser considerada no brinde | int | sim |
| valorTotal | valor total do carrinho caso o tipo seja igual a 1 | string | obrigatório caso o tipo seja igual a 1  <br> |
| categorias | array das categorias a serem adicionadas | array | sim |
| categorias.id | código da categoria | string | sim |
| categorias.quantidade | quantidade para regra da categoria, caso o tipo seja 1 a quantidade é desconsiderada | string | sim |
| brindes | array com os produtos a serem adicionados de brinde | array | nao |
| brindes.sku | codigo do produto | string | sim |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraCategorias(CadastraCategoriasRequest $body): NewRequest
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraCategoriasRequest`](../../doc/models/cadastra-categorias-request.md) | Body, Required | - |

## Response Type

[`NewRequest`](../../doc/models/new-request.md)

## Example Usage

```php
$body = CadastraCategoriasRequestBuilder::init(
    1,
    '20',
    [
        Categoria1Builder::init(
            '18',
            '1'
        )->build(),
        Categoria1Builder::init(
            '19',
            '2'
        )->build()
    ],
    [
        Brindes1Builder::init(
            '867597'
        )->build()
    ]
)->build();

$result = $categoriasController->cadastraCategorias($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Categorias cadastradas com sucesso",
  "responseCode": "200"
}
```


# Deletar Categorias

# Deletar categorias e seus brindes

**/brindes/categorias/{codigo_da_oferta}**

| **nome** | **descrição** | **tipo** | **obrigatório** |
| --- | --- | --- | --- |
| categorias | array de categorias a ser deletado | array | nao |
| categorias.id | código da categoria | string | sim |
| brindes | array de brindes a ser deletado | array | nao |
| brindes.sku | código do produtos | string | sim |

:information_source: **Note** This endpoint does not require authentication.

```php
function deletarCategorias(DeletarCategoriasRequest $body): NewRequest
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeletarCategoriasRequest`](../../doc/models/deletar-categorias-request.md) | Body, Required | - |

## Response Type

[`NewRequest`](../../doc/models/new-request.md)

## Example Usage

```php
$body = DeletarCategoriasRequestBuilder::init(
    [
        Categoria2Builder::init(
            '18'
        )->build(),
        Categoria2Builder::init(
            '19'
        )->build()
    ],
    [
        Brindes1Builder::init(
            '913820'
        )->build()
    ]
)->build();

$result = $categoriasController->deletarCategorias($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "categorias deletadas com sucesso",
  "responseCode": "200"
}
```

