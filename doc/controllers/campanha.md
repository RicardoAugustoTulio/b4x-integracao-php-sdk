# Campanha

```php
$campanhaController = $client->getCampanhaController();
```

## Class Name

`CampanhaController`

## Methods

* [Cadastra Campanha](../../doc/controllers/campanha.md#cadastra-campanha)
* [Consulta Campanha](../../doc/controllers/campanha.md#consulta-campanha)
* [Inativar Campanha](../../doc/controllers/campanha.md#inativar-campanha)
* [Atualizar Campanha](../../doc/controllers/campanha.md#atualizar-campanha)
* [Cadastra Campanha 1](../../doc/controllers/campanha.md#cadastra-campanha-1)
* [Consulta Campanha 1](../../doc/controllers/campanha.md#consulta-campanha-1)
* [Inativar Campanha 1](../../doc/controllers/campanha.md#inativar-campanha-1)
* [Atualizar Campanha 1](../../doc/controllers/campanha.md#atualizar-campanha-1)
* [Cadastra Campanha 2](../../doc/controllers/campanha.md#cadastra-campanha-2)
* [Consulta Campanha 2](../../doc/controllers/campanha.md#consulta-campanha-2)
* [Inativar Campanha 2](../../doc/controllers/campanha.md#inativar-campanha-2)
* [Atualizar Campanha 2](../../doc/controllers/campanha.md#atualizar-campanha-2)
* [Cadastra Campanha 3](../../doc/controllers/campanha.md#cadastra-campanha-3)
* [Consulta Campanha 3](../../doc/controllers/campanha.md#consulta-campanha-3)
* [Inativar Campanha 3](../../doc/controllers/campanha.md#inativar-campanha-3)
* [Atualizar Campanha 3](../../doc/controllers/campanha.md#atualizar-campanha-3)


# Cadastra Campanha

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraCampanha(CadastraCampanhaRequest $body): CadastraCampanha1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraCampanhaRequest`](../../doc/models/cadastra-campanha-request.md) | Body, Required | - |

## Response Type

[`CadastraCampanha1`](../../doc/models/cadastra-campanha-1.md)

## Example Usage

```php
$body = CadastraCampanhaRequestBuilder::init(
    '2001',
    'Campanha Teste CADASTRO PELA API 2',
    '2017-10-24 12:34:00',
    '2099-10-25 12:34:00',
    '800'
)->build();

$result = $campanhaController->cadastraCampanha($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha cadastrada com sucesso",
  "responseCode": "200"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Bad Request | [`CadastraCampanhaException`](../../doc/models/cadastra-campanha-exception.md) |


# Consulta Campanha

```json
{
    "id_campanha_promocional": "2000",
    "status_campanha_promocional": "0",
    "nome_campanha_promocional": "Campanha Teste CAD API - ALTERACAO",
    "tipo_campanha_promocional": null,
    "inicio_campanha_promocional": "2020-01-01 12:34:00",
    "fim_campanha_promocional": "2099-10-25 12:34:00",
    "logo_campanha_promocional": null,
    "banner_campanha_promocional": null,
    "obs_campanha_promocional": null,
    "identificador_campanha_promocional": null,
    "priorididade_campanha_promocional": "-500",
    "campanha_vitrine": null,
    "campanha_place": null,
    "campanha_utms": null,
    "seo_campanha": null,
    "bloquear_place_campanha": null,
    "bloquear_busca_campanha": null,
    "bloquear_erp_campanha": null,
    "created_at": "2020-09-02 13:57:12",
    "updated_at": "2020-09-02 16:25:06",
    "gerar_link": "0",
    "regra_ativacao": "0",
    "dias_semana": "",
    "inicio_periodo": "00:00:00",
    "fim_periodo": "00:00:00",
    "temporizador": "0",
    "title": null,
    "meta_description": null,
    "padrao_etiquetas": "0",
    "url_fixa": ""
}
```

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaCampanha(): ConsultaCampanha
```

## Response Type

[`ConsultaCampanha`](../../doc/models/consulta-campanha.md)

## Example Usage

```php
$result = $campanhaController->consultaCampanha();
```

## Example Response *(as JSON)*

```json
{
  "id_campanha_promocional": "2000",
  "status_campanha_promocional": "0",
  "nome_campanha_promocional": "Campanha Teste CAD API - ALTERACAO",
  "tipo_campanha_promocional": null,
  "inicio_campanha_promocional": "2020-01-01 12:34:00",
  "fim_campanha_promocional": "2099-10-25 12:34:00",
  "logo_campanha_promocional": null,
  "banner_campanha_promocional": null,
  "obs_campanha_promocional": null,
  "identificador_campanha_promocional": null,
  "priorididade_campanha_promocional": "-500",
  "campanha_vitrine": null,
  "campanha_place": null,
  "campanha_utms": null,
  "seo_campanha": null,
  "bloquear_place_campanha": null,
  "bloquear_busca_campanha": null,
  "bloquear_erp_campanha": null,
  "created_at": "2020-09-02 13:57:12",
  "updated_at": "2020-09-02 16:25:06",
  "gerar_link": "0",
  "regra_ativacao": "0",
  "dias_semana": "",
  "inicio_periodo": "00:00:00",
  "fim_periodo": "00:00:00",
  "temporizador": "0",
  "title": null,
  "meta_description": null,
  "padrao_etiquetas": "0",
  "url_fixa": ""
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Bad Request | [`ConsultaCampanha1Exception`](../../doc/models/consulta-campanha-1-exception.md) |


# Inativar Campanha

:information_source: **Note** This endpoint does not require authentication.

```php
function inativarCampanha(): InativarCampanha
```

## Response Type

[`InativarCampanha`](../../doc/models/inativar-campanha.md)

## Example Usage

```php
$result = $campanhaController->inativarCampanha();
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha desativada com sucesso",
  "responseCode": "200"
}
```


# Atualizar Campanha

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarCampanha(AtualizarCampanhaRequest $body): AtualizarCampanha
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarCampanhaRequest`](../../doc/models/atualizar-campanha-request.md) | Body, Required | - |

## Response Type

[`AtualizarCampanha`](../../doc/models/atualizar-campanha.md)

## Example Usage

```php
$body = AtualizarCampanhaRequestBuilder::init(
    'Campanha Teste CAD API - ALTERACAO',
    '2020-01-01 12:34:00',
    '2099-10-25 12:34:00',
    '-500'
)->build();

$result = $campanhaController->atualizarCampanha($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha atualizada com sucesso",
  "responseCode": "200"
}
```


# Cadastra Campanha 1

# Tabela base para controlar os vencimentos das campanhas

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| id_campanha_brindes | codigo da campanha | string | sim |
| nome_campanha_brindes | nome da campanha para controle interno |  string | sim |
| inicio_campanha_brindes |  data de inicio da campanha  | datetime | sim |
| fim_campanha_brindes |  data de vencimento da campanha  | datetime | sim |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraCampanha1(CadastraCampanhaRequest1 $body): CadastraCampanha1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraCampanhaRequest1`](../../doc/models/cadastra-campanha-request-1.md) | Body, Required | - |

## Response Type

[`CadastraCampanha1`](../../doc/models/cadastra-campanha-1.md)

## Example Usage

```php
$body = CadastraCampanhaRequest1Builder::init(
    '20',
    'Campanha Teste CADASTRO PELA API',
    '2017-10-24 12:34:00',
    '2099-10-25 12:34:00'
)->build();

$result = $campanhaController->cadastraCampanha1($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha cadastrada com sucesso",
  "responseCode": "200"
}
```


# Consulta Campanha 1

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaCampanha1(): ConsultaCampanha3
```

## Response Type

[`ConsultaCampanha3`](../../doc/models/consulta-campanha-3.md)

## Example Usage

```php
$result = $campanhaController->consultaCampanha1();
```

## Example Response *(as JSON)*

```json
{
  "id_campanha_brindes": "9",
  "status_campanha_brindes": "1",
  "nome_campanha_brindes": "B4C Teste Produtos",
  "tipo_campanha_brindes": "3",
  "inicio_campanha_brindes": "2020-11-10 09:32:00",
  "fim_campanha_brindes": "2020-11-30 09:32:00",
  "logo_campanha_brindes": "",
  "banner_campanha_brindes": null,
  "obs_campanha_brindes": "",
  "identificador_campanha_brindes": "B4C Teste Produtos",
  "priorididade_campanha_brindes": "3",
  "brindes_utms": "0"
}
```


# Inativar Campanha 1

:information_source: **Note** This endpoint does not require authentication.

```php
function inativarCampanha1(): void
```

## Response Type

`void`

## Example Usage

```php
$campanhaController->inativarCampanha1();
```


# Atualizar Campanha 1

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| nome_campanha_brindes | nome da campanha para controle interno |  string | nao |
| inicio_campanha_brindes |  data de inicio da campanha  | datetime | nao |
| fim_campanha_brindes |  data de vencimento da campanha  | datetime | nao |
| priorididade_campanha_brindes |  prioridade da campanha  | int | nao |
| status_campanha_brindes | status da campanha. 0 = inativa 1 = ativa| int | nao |

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarCampanha1(AtualizarCampanhaRequest1 $body): AtualizarCampanha
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarCampanhaRequest1`](../../doc/models/atualizar-campanha-request-1.md) | Body, Required | - |

## Response Type

[`AtualizarCampanha`](../../doc/models/atualizar-campanha.md)

## Example Usage

```php
$body = AtualizarCampanhaRequest1Builder::init(
    'Campanha Teste CADASTRO PELA API EDITADO',
    '2017-10-24 12:34:00',
    '2099-10-25 12:34:00',
    '10',
    1
)->build();

$result = $campanhaController->atualizarCampanha1($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha atualizada com sucesso",
  "responseCode": "200"
}
```


# Cadastra Campanha 2

###Adicionar Campanha Leve mais por menos

_`#POST /leve-mais-por-menos`_

**Requisição**

\*Body

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| id_campanha_levemais | codigo identificador da campanha | int | sim |
| nome_campanha_levemais | nome para identificação da campanha | string | sim |
| inicio_campanha_levemais | data e hora do inicio da campanha | string | sim |
| fim_campanha_levemais | data e hora do término da campanha | string | sim |
| prioridade_campanha_levemais | prioridade da campanha em relação as demais | int | nao |
| comprando_produtos | quantidade necessária do produto para ativar a promoção | int | sim |
| numero_produtos_beneficio | número de unidades do produto que receberá o desconto | int | sim |
| percentual_desconto | desconto que será aplicado aos produtos. Enviar 100 para item grátis | float | sim |
| status_campanha_levemais | status da campanha  <br>0 = inativo  <br>1 = ativo | int | sim |

\*_\\_Exemplo

```json
{
    "id_campanha_levemais": "20",
    "nome_campanha_levemais": "Pague 2 leve 3",
    "inicio_campanha_levemais": "2017-10-24 12:34:00",
    "fim_campanha_levemais": "2099-10-25 12:34:00",
    "prioridade_campanha_levemais": 10,
    "comprando_produtos": 2,
    "numero_produtos_beneficio": 1,
    "percentual_desconto": 100,
    "status_campanha_levemais": 1
}

```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 201 | camp cadastrada com sucesso | mensagem | {"campanha cadastrada com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"a campanha já está cadastrada"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](mailto:suporte@b4commerce.com.br)"} |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraCampanha2(CadastraCampanhaRequest2 $body): CadastraCampanha1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraCampanhaRequest2`](../../doc/models/cadastra-campanha-request-2.md) | Body, Required | - |

## Response Type

[`CadastraCampanha1`](../../doc/models/cadastra-campanha-1.md)

## Example Usage

```php
$body = CadastraCampanhaRequest2Builder::init(
    '20',
    'Pague 2 leve 3',
    '2017-10-24 12:34:00',
    '2099-10-25 12:34:00',
    10,
    2,
    1,
    100,
    1
)->build();

$result = $campanhaController->cadastraCampanha2($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha cadastrada com sucesso",
  "responseCode": "200"
}
```


# Consulta Campanha 2

###Listar Campanha Leve mais por menos
*`GET /leve-mais-por-menos/?={Offest}&Limit={Limit}`*

**Retorna todas as campanhas ativas
**Requisição
**Parâmetros da Url

| Nome | Descrição | Tipo  | Inf Adicional |
|------------|---------|----------------|----------------|
| Offset | Ignora os primeiros { Offset } itens | Integer | |
| Limit | Define a quantidade de registros | Integer | 50 registros |

**Requisição
**Parâmetros da Url
*`#GET /leve-mais-por-menos/{id}`*
**Retorna informações sobre uma campanha cadastrada

| Nome | Descrição | Tipo  | Obrigatório|
|------------|---------|------------------|--------------|
| id | código identificador da campanha | int | Sim |

*Resposta*

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| id_campanha_levemais | codigo identificador da campanha | int | sim |
| nome_campanha_levemais | nome para identificação da campanha |  string | sim |
| inicio_campanha_levemais | data e hora do inicio da campanha |  string | sim |
| fim_campanha_levemais | data e hora do término da campanha |  string | sim |
| prioridade_campanha_levemais | prioridade da campanha em relação as demais |  int | nao |
| comprando_produtos | quantidade necessária do produto para ativar a promoção |  int | sim |
| numero_produtos_beneficio | número de unidades do produto que receberá o desconto |  int | sim |
| percentual_desconto | desconto que será aplicado aos produtos. Enviar 100 para item grátis |  float | sim |

*Output*

```json
   
   {
    "id_campanha_levemais": "20",
    "nome_campanha_levemais": "Pague 2 leve 3",
    "inicio_campanha_levemais": "2017-10-24 12:34:00",
    "fim_campanha_levemais": "2099-10-25 12:34:00",
    "prioridade_campanha_levemais": 10,
    "comprando_produtos":2,
    "numero_produtos_beneficio":1,
    "percentual_desconto":100

}
```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
|------|-----------|----------|------------- |
| 404 | Campanha não encontrada| mensagem | {"a campanha não foi encontrada"} |
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br"} |

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaCampanha2(): array
```

## Response Type

[`ConsultaCampanha4[]`](../../doc/models/consulta-campanha-4.md)

## Example Usage

```php
$result = $campanhaController->consultaCampanha2();
```

## Example Response *(as JSON)*

```json
[
  {
    "id_campanha_levemais": "20",
    "status_campanha_levemais": "1",
    "nome_campanha_levemais": "Pague 2 leve 3",
    "inicio_campanha_levemais": "Pague 2 leve 3",
    "fim_campanha_levemais": "Pague 2 leve 3",
    "prioridade_campanha_levemais": "10",
    "comprando_produtos": "2",
    "numero_produtos_beneficio": "1",
    "percentual_desconto": "100.00"
  }
]
```


# Inativar Campanha 2

:information_source: **Note** This endpoint does not require authentication.

```php
function inativarCampanha2(): void
```

## Response Type

`void`

## Example Usage

```php
$campanhaController->inativarCampanha2();
```


# Atualizar Campanha 2

###Atualizar Campanha Leve mais por menos

_`#PUT /leve-mais-por-menos/{id}`_

**Requisição**  
Parâmetros da Url

| Nome | Descrição | Tipo | Obrigatório |
| --- | --- | --- | --- |
| id | codigo identificador da campanha | int | Sim |

_Body_

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| nome_campanha_levemais | nome para identificação da campanha | string | sim |
| inicio_campanha_levemais | data e hora do inicio da campanha | string | sim |
| fim_campanha_levemais | data e hora do término da campanha | string | sim |
| prioridade_campanha_levemais | prioridade da campanha em relação as demais | int | nao |
| comprando_produtos | quantidade necessária do produto para ativar a promoção | int | sim |
| numero_produtos_beneficio | número de unidades do produto que receberá o desconto | int | sim |
| percentual_desconto | desconto que será aplicado aos produtos. Enviar 100 para item grátis | float | sim |
| status_campanha_levemais | status da campanha  <br>1 = ativo  <br>0 = inativo | int | sim |

**\*Exemplo

```json
{
    "nome_campanha_levemais": "Pague 2 leve 3",
    "inicio_campanha_levemais": "2017-10-24 12:34:00",
    "fim_campanha_levemais": "2099-10-25 12:34:00",
    "prioridade_campanha_levemais": 10,
    "comprando_produtos": 2,
    "numero_produtos_beneficio": 1,
    "percentual_desconto": 100,
    "status_campanha_levemais": 1
}

```

_Resposta_

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 200 | campanha alterada com Sucesso | mensagem | {"campanha atualizada com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"campanha nao encontrada"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](mailto:suporte@b4commerce.com.br) "} |

```json
        {
           "mensagem": "campanha alterada com sucesso"
        }

```

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarCampanha2(AtualizarCampanhaRequest2 $body): AtualizarCampanha
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarCampanhaRequest2`](../../doc/models/atualizar-campanha-request-2.md) | Body, Required | - |

## Response Type

[`AtualizarCampanha`](../../doc/models/atualizar-campanha.md)

## Example Usage

```php
$body = AtualizarCampanhaRequest2Builder::init(
    'Pague 2 leve 3',
    '2017-10-24 12:34:00',
    '2099-10-25 12:34:00',
    10,
    2,
    1,
    100,
    1
)->build();

$result = $campanhaController->atualizarCampanha2($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha atualizada com sucesso",
  "responseCode": "200"
}
```


# Cadastra Campanha 3

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraCampanha3(CadastraCampanhaRequest3 $body): CadastraCampanha1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraCampanhaRequest3`](../../doc/models/cadastra-campanha-request-3.md) | Body, Required | - |

## Response Type

[`CadastraCampanha1`](../../doc/models/cadastra-campanha-1.md)

## Example Usage

```php
$body = CadastraCampanhaRequest3Builder::init(
    10,
    'Campanha Teste CADASTRO PELA API 10',
    '2017-10-24 12:34:00',
    '2099-10-25 12:34:00',
    '800',
    3
)->build();

$result = $campanhaController->cadastraCampanha3($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha cadastrada com sucesso",
  "responseCode": "200"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Bad Request | [`CadastraCampanhaException`](../../doc/models/cadastra-campanha-exception.md) |


# Consulta Campanha 3

```json
{
    "id_campanha_promocional": "2000",
    "status_campanha_promocional": "0",
    "nome_campanha_promocional": "Campanha Teste CAD API - ALTERACAO",
    "tipo_campanha_promocional": null,
    "inicio_campanha_promocional": "2020-01-01 12:34:00",
    "fim_campanha_promocional": "2099-10-25 12:34:00",
    "logo_campanha_promocional": null,
    "banner_campanha_promocional": null,
    "obs_campanha_promocional": null,
    "identificador_campanha_promocional": null,
    "priorididade_campanha_promocional": "-500",
    "campanha_vitrine": null,
    "campanha_place": null,
    "campanha_utms": null,
    "seo_campanha": null,
    "bloquear_place_campanha": null,
    "bloquear_busca_campanha": null,
    "bloquear_erp_campanha": null,
    "created_at": "2020-09-02 13:57:12",
    "updated_at": "2020-09-02 16:25:06",
    "gerar_link": "0",
    "regra_ativacao": "0",
    "dias_semana": "",
    "inicio_periodo": "00:00:00",
    "fim_periodo": "00:00:00",
    "temporizador": "0",
    "title": null,
    "meta_description": null,
    "padrao_etiquetas": "0",
    "url_fixa": ""
}
```

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaCampanha3(): ConsultaCampanha
```

## Response Type

[`ConsultaCampanha`](../../doc/models/consulta-campanha.md)

## Example Usage

```php
$result = $campanhaController->consultaCampanha3();
```

## Example Response *(as JSON)*

```json
{
  "id_campanha_promocional": "2000",
  "status_campanha_promocional": "0",
  "nome_campanha_promocional": "Campanha Teste CAD API - ALTERACAO",
  "tipo_campanha_promocional": null,
  "inicio_campanha_promocional": "2020-01-01 12:34:00",
  "fim_campanha_promocional": "2099-10-25 12:34:00",
  "logo_campanha_promocional": null,
  "banner_campanha_promocional": null,
  "obs_campanha_promocional": null,
  "identificador_campanha_promocional": null,
  "priorididade_campanha_promocional": "-500",
  "campanha_vitrine": null,
  "campanha_place": null,
  "campanha_utms": null,
  "seo_campanha": null,
  "bloquear_place_campanha": null,
  "bloquear_busca_campanha": null,
  "bloquear_erp_campanha": null,
  "created_at": "2020-09-02 13:57:12",
  "updated_at": "2020-09-02 16:25:06",
  "gerar_link": "0",
  "regra_ativacao": "0",
  "dias_semana": "",
  "inicio_periodo": "00:00:00",
  "fim_periodo": "00:00:00",
  "temporizador": "0",
  "title": null,
  "meta_description": null,
  "padrao_etiquetas": "0",
  "url_fixa": ""
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Bad Request | [`ConsultaCampanha1Exception`](../../doc/models/consulta-campanha-1-exception.md) |


# Inativar Campanha 3

:information_source: **Note** This endpoint does not require authentication.

```php
function inativarCampanha3(): InativarCampanha
```

## Response Type

[`InativarCampanha`](../../doc/models/inativar-campanha.md)

## Example Usage

```php
$result = $campanhaController->inativarCampanha3();
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha desativada com sucesso",
  "responseCode": "200"
}
```


# Atualizar Campanha 3

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarCampanha3(AtualizarCampanhaRequest3 $body): AtualizarCampanha
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarCampanhaRequest3`](../../doc/models/atualizar-campanha-request-3.md) | Body, Required | - |

## Response Type

[`AtualizarCampanha`](../../doc/models/atualizar-campanha.md)

## Example Usage

```php
$body = AtualizarCampanhaRequest3Builder::init(
    10,
    'Campanha Teste Alteracao CADASTRO PELA API 10',
    '2017-10-24 12:34:00',
    '2099-10-25 12:34:00',
    '800',
    3
)->build();

$result = $campanhaController->atualizarCampanha3($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Campanha atualizada com sucesso",
  "responseCode": "200"
}
```

