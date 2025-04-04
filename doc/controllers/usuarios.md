# Usuarios

```php
$usuariosController = $client->getUsuariosController();
```

## Class Name

`UsuariosController`

## Methods

* [Lista Usuarios](../../doc/controllers/usuarios.md#lista-usuarios)
* [Cadastrar Usuario](../../doc/controllers/usuarios.md#cadastrar-usuario)
* [Atualizar Usuario](../../doc/controllers/usuarios.md#atualizar-usuario)
* [Inativar Usuario](../../doc/controllers/usuarios.md#inativar-usuario)
* [Lista Dos Niveis](../../doc/controllers/usuarios.md#lista-dos-niveis)


# Lista Usuarios

_`GET /usuarios/?offest={Offest}&Limit={Limit}`_

\*_Retorna todos os usuários  
\*_Requisição  
**Parâmetros da Url

| Nome | Descrição | Tipo | Inf Adicional |
| --- | --- | --- | --- |
| Offset | Ignora os primeiros { Offset } itens | Integer |  |
| Limit | Define a quantidade de registros | Integer | 200 registros |

View more

_Requisição  
\*Parâmetros da Url  
\*__`#GET /usuarios/{codigo}`_  
**Retorna informações sobre um usuário cadastrado

| Nome | Descrição | Tipo | Obrigatório |
| --- | --- | --- | --- |
| codigo | código do usuário | string | Sim |

View more

_Resposta_

| nome | descricao | tipo |
| --- | --- | --- |
| codigo | codigo do usuario | string |
| nome | nome do usuário | string |
| email | email do usuário | string |
| status | status do usuário | string |
| nivel | nivel do perfil do usuário | string |

_Output_

\`\`\`json  
\[

{  
"codigo": "4",

"nome": "Teste Api3",

"email": "beyin50980@pixiil.com",

"status": "0",

"nivel": "1"

}

\]

```php
function listaUsuarios(): array
```

## Response Type

[`ListaUsuario[]`](../../doc/models/lista-usuario.md)

## Example Usage

```php
$result = $usuariosController->listaUsuarios();
```

## Example Response *(as JSON)*

```json
[
  {
    "codigo": "4",
    "nome": "Teste Api2",
    "email": "beyin50980@pixiil.com",
    "status": "1",
    "nivel": "1"
  }
]
```


# Cadastrar Usuario

###Adicionar usuario

_`#POST /usuarios`_

**Requisição**

\*Body

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| codigo | codigo do usuario | string | sim |
| descricao | nome do usuario | string | sim |
| login | login do usuario | string | sim |
| email | email do usuario | string | sim |
| nivel | nivel do perfil do usuario | string | sim |
| empresa_id | empresa vinculada ao usuario (Caso o cadastro seja para o cerebro) | string | não |
| filiais | array com as filiais cadastradas do usuarios | array | não |
| filial | codigo que indica a filial | string | não |

\*_\\_Exemplo

JSON

```
{
    "codigo": 5,
    "nome": "Teste Api2",
    "login": "teste api",
    "email": "beyin50980@pixiil.com",
    "nivel": "1",
    "filiais": [
        {
            "filial": "0"
        }
    ]
}

```

**Resposta

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 201 | categoria cadastrada com sucesso | mensagem | {"Usuario cadastrado com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"Codigo ou email já cadastrado"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](https://desktop.postman.com/?desktopVersion=9.31.28&userId=13470086&teamId=0)"} |

```php
function cadastrarUsuario(CadastrarUsuarioRequest $body): CadastrarUsuario
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarUsuarioRequest`](../../doc/models/cadastrar-usuario-request.md) | Body, Required | - |

## Response Type

[`CadastrarUsuario`](../../doc/models/cadastrar-usuario.md)

## Example Usage

```php
$body = CadastrarUsuarioRequestBuilder::init(
    5,
    'Teste Api2',
    'teste api',
    'beyin50980@pixiil.com',
    '1',
    [
        FiliaiBuilder::init(
            '0'
        )->build()
    ]
)->build();

$result = $usuariosController->cadastrarUsuario($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Usuario cadastrado com sucesso",
  "responseCode": "201"
}
```


# Atualizar Usuario

###Alterar Usuario  
_`#PUT /usuarios/{codigo}`_

\*Requisição

Parâmetros da Url

| Nome | Descrição | Tipo | Obrigatório |
| --- | --- | --- | --- |
| codigo | código do usuario | string | Sim |

View more

_Body_

| nome | descricao | tipo |
| --- | --- | --- |
| nome | nome do usuario | string |
| email | email do usuario | string |
| login | login do usuario | string |
| nivel | nivel do perfil do usuario | string |
| status | status do usuario | string |
| empresa_id | empresa vinculada ao usuario (Caso o cadastro seja para o cerebro) | string |
| tipo_vendedor | tipo do vendedor | int |
| filiais | array com as filiais cadastradas do usuarios | array |
| filial | codigo que indica a filial | string |

| tipo vendedor | descricao |
| --- | --- |
| 1 | Site televendas |
| 2 | Loja fisíca |

_Exemplo_

JSON

```
{
    "nome": "Teste Api3",
    "login": "teste api",
    "email": "beyin50980@pixiil.com",
    "nivel": "1",
    "status": "0"
}

```

_Resposta_

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 200 | usuario alterado com Sucesso | mensagem | {"usuario atualizado com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"usuario nao encontrado"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](https://desktop.postman.com/?desktopVersion=9.31.28&userId=13470086&teamId=0) "} |

View moreBodyraw (text)text

```
{
    "nome": "Teste Api3",
    "login": "teste api",
    "email": "beyin50980@pixiil.com",
    "nivel": "1",
    "status": "0"
}

```

```php
function atualizarUsuario(AtualizarUsuarioRequest $body): AtualizarUsuario
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarUsuarioRequest`](../../doc/models/atualizar-usuario-request.md) | Body, Required | - |

## Response Type

[`AtualizarUsuario`](../../doc/models/atualizar-usuario.md)

## Example Usage

```php
$body = AtualizarUsuarioRequestBuilder::init(
    'Teste Api3',
    'teste api',
    'beyin50980@pixiil.com',
    '1',
    '0',
    [
        FiliaiBuilder::init(
            '0'
        )->build()
    ]
)->build();

$result = $usuariosController->atualizarUsuario($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Usuario atualizado com sucesso",
  "responseCode": "201"
}
```


# Inativar Usuario

_`#DELETE/usuarios/{codigo}`_

\*_Requisição  
\*_Parâmetros da Url

| Nome | Descrição | Tipo | Obrigatório |
| --- | --- | --- | --- |
| codigo | código do usuario | string | Sim |

View more

\*Body  
N/A

_Resposta_

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 200 | usuario inativado com Sucesso | mensagem | {"Usuario atualizado com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"Usuario nao encontrado"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](https://desktop.postman.com/?desktopVersion=9.31.28&userId=13470086&teamId=0) "} |

```php
function inativarUsuario(): InativarUsuario
```

## Response Type

[`InativarUsuario`](../../doc/models/inativar-usuario.md)

## Example Usage

```php
$result = $usuariosController->inativarUsuario();
```

## Example Response *(as JSON)*

```json
{
  "message": "usuario inativado",
  "responseCode": "200"
}
```


# Lista Dos Niveis

```php
function listaDosNiveis(): array
```

## Response Type

[`ListaDosNivei[]`](../../doc/models/lista-dos-nivei.md)

## Example Usage

```php
$result = $usuariosController->listaDosNiveis();
```

## Example Response *(as JSON)*

```json
[
  {
    "nivel": "1",
    "nome": "Master",
    "permissoes": "1"
  },
  {
    "nivel": "2",
    "nome": "Administrador",
    "permissoes": "1"
  },
  {
    "nivel": "3",
    "nome": "Administrador SEO",
    "permissoes": "1"
  }
]
```

