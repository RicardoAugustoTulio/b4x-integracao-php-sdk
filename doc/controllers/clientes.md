# Clientes

```php
$clientesController = $client->getClientesController();
```

## Class Name

`ClientesController`

## Methods

* [Lista Clientes](../../doc/controllers/clientes.md#lista-clientes)
* [Cadastrar Cliente](../../doc/controllers/clientes.md#cadastrar-cliente)
* [Atualizar Cliente](../../doc/controllers/clientes.md#atualizar-cliente)
* [Excluir Cliente](../../doc/controllers/clientes.md#excluir-cliente)


# Lista Clientes

> /clientes/id?cpf_cnpj={CPF_CNPJ}&data_inicial={DATA_INICIAL}&data_final={DATA_FINAL}&aceito_pj={ACEITE_TERMO} &email={EMAIL}

**Parametros GET**

| Campos | Descriçao | **Tipo** |
| --- | --- | --- |
| cpf_cnpj | CPF ou CNPJ do cliente | string |
| data_inicial | data inicio de cadastro do cliente | datetime |
| data_final | data final de cadastro do cliente | datetime |
| aceito_pj | clientes que aceitaram o termo de PJ | boolean |
| email | Email do cliente | string |

```php
function listaClientes(): void
```

## Response Type

`void`

## Example Usage

```php
$clientesController->listaClientes();
```


# Cadastrar Cliente

###Adicionar Cliente

_`#POST /clientes`_

**Requisição**

\*Body

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| nome | nome do cliente | string | sim |
| cpf_cnpj | Cpf/Cnpj do cliente | string | sim |
| email | E-mail do cliente | string | sim |
| data_nascimento | Data de nascimento do cliente, no formato Y-m-d | string | sim |
| telefone | Telefone do cliente | string | sim |
| tipo | Tipo do cliente(Pf(1) ou Pj(2)) | string | não(padrão 1) |
| rg_ie | Rg/Ie do cliente | string | não |
| contribuinte_icms | Flag contribuinte icms(1 ou 0) | string | não(padrão 0) |
| revenda_ferramentas | Flag revenda ferramentas(1 ou 0) | string | não(padrão 0) |
| celular | Celular do cliente | string | não |
| receber_emails | Flag para receber emails/newsletter(1 ou 0) | string | não(padrão 0) |

\*_\\_Exemplo

```json
{
    "nome": "cliente teste api",
    "cpf_cnpj": "74637522080",
    "email": "teste@email.com",
    "data_nascimento": "2005-10-29",
    "telefone": "41996695000",
    "tipo": "1",
    "rg_ie": "1234",
    "contribuinte_icms": "0",
    "revenda_ferramentas": "0",
    "celular": "123",
    "receber_emails": "1"
}


```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 201 | cliente cadastrado com sucesso, id do cliente | mensagem | {"cliente cadastrado com sucesso - ID: (cliente id)"} |
| 4xx | Requisição inválida | mensagem | {"o cliente já está cadastrado"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](mailto:suporte@b4commerce.com.br)"} |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarCliente(CadastrarClienteRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarClienteRequest`](../../doc/models/cadastrar-cliente-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = CadastrarClienteRequestBuilder::init(
    'cliente teste api',
    '74637522080',
    'teste@email.com',
    '2005-10-29',
    '41996695000',
    '1',
    '1234',
    '0',
    '0',
    '123',
    '1'
)->build();

$clientesController->cadastrarCliente($body);
```


# Atualizar Cliente

###Atualizar Cliente

_`#PUT /clientes/{id}`_

**Requisição**

\*Body  
\*Parâmetros da url

| nome | descricao | tipo |
| --- | --- | --- |
| nome | nome do cliente | string |
| cpf_cnpj | Cpf/Cnpj do cliente | string |
| email | E-mail do cliente | string |
| data_nascimento | Data de nascimento do cliente, no formato Y-m-d | string |
| telefone | Telefone do cliente | string |
| tipo | Tipo do cliente(Pf(1) ou Pj(2)) | string |
| rg_ie | Rg/Ie do cliente | string |
| contribuinte_icms | Flag contribuinte icms(1 ou 0) | string |
| revenda_ferramentas | Flag revenda ferramentas(1 ou 0) | string |
| celular | Celular do cliente | string |
| receber_emails | Flag para receber emails/newsletter(1 ou 0) | string |

\*_\\_Exemplo

```json
{
    "nome": "cliente update api",
    "cpf_cnpj": "74637522080",
    "email": "teste@email.com",
    "data_nascimento": "2005-10-29",
    "telefone": "41996695000",
    "tipo": "1",
    "rg_ie": "1234",
    "contribuinte_icms": "0",
    "revenda_ferramentas": "0",
    "celular": "123",
    "receber_emails": "1"
}

```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 201 | cliente atualizado com sucesso | mensagem | {"cliente atualizado com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"Cliente não encontrado"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](mailto:suporte@b4commerce.com.br)"} |

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarCliente(AtualizarClienteRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarClienteRequest`](../../doc/models/atualizar-cliente-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = AtualizarClienteRequestBuilder::init(
    'cliente update api',
    '74637522080',
    'teste@email.com',
    '2005-10-29',
    '41996695000',
    '1',
    '1234',
    '0',
    '0',
    '123',
    '1'
)->build();

$clientesController->atualizarCliente($body);
```


# Excluir Cliente

### Remover Cliente

_`#DELETE /clientes/{id}`_

\*_Requisição  
\*_Parâmetros da Url

| Nome | Descrição | Tipo | Obrigatório |
| --- | --- | --- | --- |
| codigo | código do cliente | string | Sim |

\*Body  
N/A

_Resposta_

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 200 | Cliente removido com Sucesso | mensagem | {"Cliente removido com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"Cliente nao encontrado"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](mailto:suporte@b4commerce.com.br) "} |

:information_source: **Note** This endpoint does not require authentication.

```php
function excluirCliente(): void
```

## Response Type

`void`

## Example Usage

```php
$clientesController->excluirCliente();
```

