# Endereco

```php
$enderecoController = $client->getEnderecoController();
```

## Class Name

`EnderecoController`

## Methods

* [Lista Enderecos](../../doc/controllers/endereco.md#lista-enderecos)
* [Cadastrar Endereço](../../doc/controllers/endereco.md#cadastrar-endereço)
* [Atualizar Endereço](../../doc/controllers/endereco.md#atualizar-endereço)
* [Excluir Endereço](../../doc/controllers/endereco.md#excluir-endereço)


# Lista Enderecos

> #GET /enderecos/{cliente_id}
> 
> Retorna todos os endereços de um cliente

**Parametros GET**

| Campos | Descriçao | **Tipo** |
| --- | --- | --- |
| cliente_id | ID do cliente | string |

:information_source: **Note** This endpoint does not require authentication.

```php
function listaEnderecos(): void
```

## Response Type

`void`

## Example Usage

```php
$enderecoController->listaEnderecos();
```


# Cadastrar Endereço

###Adicionar Endereço

_`#POST /enderecos`_

**Requisição**

\*Body

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| cliente_id | codigo do cliente | string | sim |
| tipo | tipo do endereço (Ex:casa) | string | sim |
| cep | cep do endereço | string | sim |
| endereco | logradouro do endereco | string | sim |
| numero | numero do endereço | string | sim |
| bairro | bairro do endereço | string | sim |
| cidade | cidade do endereço | string | sim |
| uf | UF do endereço | string | sim |
| complemento | complemento do endereço | string | não |
| telefone | telefone do endereço | string | não |
| padrao | Endereco padrao(1 para sim ou 2 para não) | string | não(padrão 2) |

\*_\\_Exemplo

```json
{
    "cliente_id" : 11,
    "tipo" : "Residencial",
    "cep" : "12345678",
    "endereco" : "Rua das Flores",
    "numero" : "123",
    "bairro" : "Centro",
    "cidade" : "Cidade Exemplo",
    "uf" : "EX",
    "complemento" : "Apto 101",
    "telefone" : "(41) 98765-4321",
    "padrao" : 1
}

```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 201 | endereco cadastrado com sucesso, id do endereço | mensagem | {"endereco cadastrado com sucesso - ID: endereco id"} |
| 4xx | Requisição inválida | mensagem | {"o endereco já está cadastrado"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](mailto:suporte@b4commerce.com.br)"} |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarEndereO(CadastrarEndereORequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarEndereORequest`](../../doc/models/cadastrar-endere-o-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = CadastrarEndereORequestBuilder::init(
    11,
    'Residencial',
    '12345678',
    'Rua das Flores',
    '123',
    'Centro',
    'Cidade Exemplo',
    'EX',
    'Apto 101',
    '(41) 98765-4321',
    1
)->build();

$enderecoController->cadastrarEndereO($body);
```


# Atualizar Endereço

###Atualizar Endereço

_`#PUT /enderecos/{id}`_

**Requisição**

\*Body  
\*Parâmetros de url

| nome | descricao | tipo |
| --- | --- | --- |
| cliente_id | codigo do cliente | string |
| tipo | tipo do endereço (Ex:casa) | string |
| cep | cep do endereço | string |
| endereco | logradouro do endereco | string |
| numero | numero do endereço | string |
| bairro | bairro do endereço | string |
| cidade | cidade do endereço | string |
| uf | UF do endereço | string |
| complemento | complemento do endereço | string |
| telefone | telefone do endereço | string |
| padrao | Endereco padrao(1 para sim ou 2 para não) | string |

\*_\\_Exemplo

```json
{
    "cliente_id" : 11,
    "tipo" : "Residencials",
    "cep" : "12345678",
    "endereco" : "Rua das Atualizado",
    "numero" : "123",
    "bairro" : "Centro",
    "cidade" : "Cidade Exemplo",
    "uf" : "EX",
    "complemento" : "Apto 101",
    "telefone" : "(11) 98765-4321",
    "padrao" : 1
}

```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 201 | endereco atualizado com sucesso | mensagem | {"endereco atualizado com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"o endereco jnão foi encontrado"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](mailto:suporte@b4commerce.com.br)"} |

```php
function atualizarEndereO(AtualizarEndereORequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarEndereORequest`](../../doc/models/atualizar-endere-o-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = AtualizarEndereORequestBuilder::init(
    11,
    'Residencials',
    '12345678',
    'Rua das Atualizado',
    '123',
    'Centro',
    'Cidade Exemplo',
    'EX',
    'Apto 101',
    '(11) 98765-4321',
    1
)->build();

$enderecoController->atualizarEndereO($body);
```


# Excluir Endereço

### Remover Endereço

_`#DELETE/enderecos/{id}`_

\*_Requisição  
\*_Parâmetros da Url

| Nome | Descrição | Tipo | Obrigatório |
| --- | --- | --- | --- |
| codigo | código do endereço | string | Sim |

\*Body  
N/A

_Resposta_

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 200 | Endereço removido com Sucesso | mensagem | {"Endereço removido com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"Endereço nao encontrado"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](mailto:suporte@b4commerce.com.br) "} |

```php
function excluirEndereO(): void
```

## Response Type

`void`

## Example Usage

```php
$enderecoController->excluirEndereO();
```

