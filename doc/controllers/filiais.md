# Filiais

```php
$filiaisController = $client->getFiliaisController();
```

## Class Name

`FiliaisController`

## Methods

* [Cadastrar Filial](../../doc/controllers/filiais.md#cadastrar-filial)
* [Consulta Filial](../../doc/controllers/filiais.md#consulta-filial)
* [Deletar Filial](../../doc/controllers/filiais.md#deletar-filial)
* [Atualizar Filial](../../doc/controllers/filiais.md#atualizar-filial)


# Cadastrar Filial

###Adicionar filial

*`#POST /filiais`*

**Requisição**

*Body

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| codigo | codigo da filial | int | sim |
| nome| nome da filial | int | sim |
| razao_social| razão social | string | nao |
| cnpj| CNPJ | string | nao |
| ie| Inscrição Estadual | string | nao |
| cep| CEP da filial | string | nao |
| endereco| endereço da filial| string | nao |
| numero| numero da filial | string | nao |
| complemento| complemento da filial | string | nao |
| bairro| bairro da filial | string | nao |
| cidade| cidade da filial | string | nao |
| uf| UF da filial | string | nao |
| email_contato| email de contato da filial | string | nao |
| email_vendas| email de vendas da filial | string | nao |
| fone| Telefone principal da filial | string | nao |
| fone2| Telefone da filial | string | nao |
| url_google_maps| URL para embed do google | string | nao |
| url_video_youtube| URL de apresentação da filial no youtube | string | nao |
| possui_estacionamento| estacionamento para clientes | string | nao |
| horario_atendimento| horário de funcionamento da filial| string | nao |
| slogan| slogan da filial | string | nao |
| status| status da filial [0 => inativa, 1 => ativa] | bit | nao |

***Exemplo

```json
    {
    "codigo": 1234,
    "nome": "teste b4c nome alteracao",
    "razao_social": "teste b4c razao social alteracao",
    "cnpj": "123456789",
    "ie": "321654",
    "cep": "82320270",
    "endereco": "luiz pelegrino toaldo",
    "numero": "96",
    "complemento": "casa",
    "bairro": "santa felicidade",
    "cidade": "curitiba",
    "uf": "PR",
    "email_contato": "contato@b4commerce.com.br",
    "email_vendas": "vendas@b4commerce.com.br",
    "fone": "4132733134",
    "fone2": "41996381828",
    "url_google_maps": "google maps",
    "url_video_youtube": "video youtube",
    "possui_estacionamento": "sim",
    "horario_atendimento": "1 a 2",
    "slogan": "nao tem",
    "status": 1
}
```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
|------|-----------|----------|------------- |
| 201| Filial cadastrada com sucesso | mensagem | {"filial cadastrada com sucesso"}|
| 400 | Filial já cadastrada | mensagem | {"Código já cadastrado"} |
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br"} |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarFilial(CadastrarFilialRequest $body): CadastrarFilial
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarFilialRequest`](../../doc/models/cadastrar-filial-request.md) | Body, Required | - |

## Response Type

[`CadastrarFilial`](../../doc/models/cadastrar-filial.md)

## Example Usage

```php
$body = CadastrarFilialRequestBuilder::init(
    1234,
    'teste b4c nome alteracao',
    'teste b4c razao social alteracao',
    '123456789',
    '321654',
    '82320270',
    'luiz pelegrino toaldo',
    '96',
    'casa',
    'santa felicidade',
    'curitiba',
    'PR',
    'contato@b4commerce.com.br',
    'vendas@b4commerce.com.br',
    '4132733134',
    '41996381828',
    'google maps',
    'video youtube',
    'sim',
    '1 a 2',
    'nao tem',
    1
)->build();

$result = $filiaisController->cadastrarFilial($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Filial cadastrada com sucesso",
  "responseCode": "201"
}
```


# Consulta Filial

###Consultar filial

*`#GET /filiais/{codigo}`*

**Requisição**

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| codigo| codigo da filial | int | sim |

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
|------|-----------|----------|------------- |
| 200| Dados da filial | mensagem | {"dados da filial"}|
| 404 | Filial não cadatrada cadastrada | mensagem | {"filial não cadastrada"} |
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br"} |

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaFilial(): array
```

## Response Type

[`ConsultaFilial[]`](../../doc/models/consulta-filial.md)

## Example Usage

```php
$result = $filiaisController->consultaFilial();
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

###Deletar filial

*`#DELETE /filiais/{codigo}`*

**Requisição**

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| codigo| codigo da filial | int | sim |

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
|------|-----------|----------|------------- |
| 200| Filial removida com sucesso | mensagem | {"filial removida com sucesso"}|
| 404 | Filial não cadatrada cadastrada | mensagem | {"filial não cadastrada"} |
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br"} |

:information_source: **Note** This endpoint does not require authentication.

```php
function deletarFilial(): DeletarFilial
```

## Response Type

[`DeletarFilial`](../../doc/models/deletar-filial.md)

## Example Usage

```php
$result = $filiaisController->deletarFilial();
```

## Example Response *(as JSON)*

```json
{
  "message": "filial removida com sucesso",
  "responseCode": "200"
}
```


# Atualizar Filial

###Atualizar filial

*`#PUT /filiais/{codigo}`*

**Requisição**

*Body

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| nome| nome da filial | int | nao |
| razao_social| razão social | string | nao |
| cnpj| CNPJ | string | nao |
| ie| Inscrição Estadual | string | nao |
| cep| CEP da filial | string | nao |
| endereco| endereço da filial| string | nao |
| numero| numero da filial | string | nao |
| complemento| complemento da filial | string | nao |
| bairro| bairro da filial | string | nao |
| cidade| cidade da filial | string | nao |
| uf| UF da filial | string | nao |
| email_contato| email de contato da filial | string | nao |
| email_vendas| email de vendas da filial | string | nao |
| fone| Telefone principal da filial | string | nao |
| fone2| Telefone da filial | string | nao |
| url_google_maps| URL para embed do google | string | nao |
| url_video_youtube| URL de apresentação da filial no youtube | string | nao |
| possui_estacionamento| estacionamento para clientes | string | nao |
| horario_atendimento| horário de funcionamento da filial| string | nao |
| slogan| slogan da filial | string | nao |
| status| status da filial [0 => inativa, 1 => ativa] | bit | nao |

***Exemplo

```json
    {
    "nome": "teste b4c nome alteracao",
    "razao_social": "teste b4c razao social alteracao",
    "cnpj": "123456789",
    "ie": "321654",
    "cep": "82320270",
    "endereco": "luiz pelegrino toaldo",
    "numero": "96",
    "complemento": "casa",
    "bairro": "santa felicidade",
    "cidade": "curitiba",
    "uf": "PR",
    "email_contato": "contato@b4commerce.com.br",
    "email_vendas": "vendas@b4commerce.com.br",
    "fone": "4132733134",
    "fone2": "41996381828",
    "url_google_maps": "google maps",
    "url_video_youtube": "video youtube",
    "possui_estacionamento": "sim",
    "horario_atendimento": "1 a 2",
    "slogan": "nao tem",
    "status": 1
}
```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
|------|-----------|----------|------------- |
| 200| Filial atualizada com sucesso | mensagem | {"filial atualizada com sucesso"}|
| 404 | Filial não cadatrada cadastrada | mensagem | {"filial não cadastrada"} |
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br"} |

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarFilial(AtualizarFilialRequest $body): AtualizarFilial
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarFilialRequest`](../../doc/models/atualizar-filial-request.md) | Body, Required | - |

## Response Type

[`AtualizarFilial`](../../doc/models/atualizar-filial.md)

## Example Usage

```php
$body = AtualizarFilialRequestBuilder::init(
    'teste b4c nome alteracao',
    'teste b4c razao social alteracao 2',
    '123456789',
    '321654',
    '82320270',
    'luiz pelegrino toaldo',
    '96',
    'casa',
    'santa felicidade',
    'curitiba',
    'PR',
    'contato@b4commerce.com.br',
    'vendas@b4commerce.com.br',
    '4132733134',
    '41996381828',
    'google maps',
    'video youtube',
    'sim',
    '1 a 2',
    'nao tem',
    1
)->build();

$result = $filiaisController->atualizarFilial($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Atualizado com sucesso",
  "responseCode": "200"
}
```

