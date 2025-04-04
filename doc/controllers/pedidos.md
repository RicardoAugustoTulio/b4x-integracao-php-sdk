# Pedidos

## Pedidos

Através da Api o lojista pode consultar todos os pedidos recebidos através da plataforma, marketplaces e demais integraçoes.

```php
$pedidosController = $client->getPedidosController();
```

## Class Name

`PedidosController`

## Methods

* [Cancela Um Pedido](../../doc/controllers/pedidos.md#cancela-um-pedido)
* [Listar Pedidos](../../doc/controllers/pedidos.md#listar-pedidos)
* [Listar Um Pedido](../../doc/controllers/pedidos.md#listar-um-pedido)
* [Pedido](../../doc/controllers/pedidos.md#pedido)
* [Pedidos Cpf](../../doc/controllers/pedidos.md#pedidos-cpf)


# Cancela Um Pedido

:information_source: **Note** This endpoint does not require authentication.

```php
function cancelaUmPedido(): void
```

## Response Type

`void`

## Example Usage

```php
$pedidosController->cancelaUmPedido();
```


# Listar Pedidos

###Listar pedidos  
Retorna a relação de pedidos, em ordem crescente por data, dentro do intervalo de data e demais filtros informados.  
O envio da data inicial e final para consulta é obrigatório e ainda é possível incluir mais filtros na consulta.

_Query parameters_

| API | Descrição |
| --- | --- |
| GET /pedidos/?data_inicial={data_inicial}&data_final{data_final}&status={status,status}&offset={Offest}&Limit={Limit} | Retorna todos os pedidos disponíveis para baixa |
| GET /pedidos/?={id} | Retorna informações de um pedido específico |
| `_#GET /pedidos/?data_inicial=2020-01-01 00:00:01&data_final=2020-01-01 00:00:01&offset={Offest}&limit={Limit}&ingorar_integrados=1` |  |

_Parâmetros da Url_

| Nome | Descrição | Inf Adicional |
| --- | --- | --- |
| offset | Pagina a ser consultada | inicia no 0 |
| limit | Define a quantidade de registros | máx 50 registros |
| data_inicial | Data inicial dos pedidos | (aaa-mm-dd hh:mm:ss |
| data_final | Define a quantidade de registros | (aaa-mm-dd hh:mm:ss |
| status | filtra os pedidos com quais status devem ser listados | (confirmados,cancelados) |
| ignorar_integrados | Não listar pedidos integrados. | 1 ou true |

| nome | descricao | tipo |
| --- | --- | --- |
| codigo | número do pedido | int |
| canal | canal de origem da venda | string |
| pedido_marketplace | número do pedido no marketplace | string |
| unidade_faturamento | código da unidade responsável pelo faturamento | string |
| marketplace | identificador do marketplace | string |
| status | situacao pedido | string |
| descricao_status | descrição da situação do pedido | string |
| data_criacao | Data e Hora da Criação do pedido | datetime |
| data_confirmacao | Data da confirmação do pedido | datetime |
| confirmado_por | Responsável pela confirmação | string |
| codigo_vendedor | vendedor associado ao pedido | int |
| subtotal | valor total dos produtos do pedido | float |
| acrescimos | valor total dos acréscimos do pedido | float |
| valor_frete | valor total do frete pedido | float |
| pontos_utilizados | pontos utilizados no pedido | float |
| descontos | valor total dos descontos do pedido | float |
| total_pedido | valor total do pedido | float |
| pagamentos | lista de pagamentos para o pedido | lista de \* [pagamentos](#api-pagamentos-do-pedido) |
| entregas | lista de entregas o pedido | lista de \* [entregas](#api-entregas-do-pedido) |
| dados_do_cliente | lista de informações do cliente | lista de dados do\* [cliente](#clientes) |
| dados_da_entrega | lista de informações da entrega | lista de dados da\* [entrega](#enderecos) |
| notas_fiscais | lista de notas cadastradas no pedido | lista de \* [notas](#api-notas-fiscais-do-pedido) |

_Output_

```json
{
    [
        {
            "codigo": "145332",
            "canal": "Site",
            "pedido_marketplace": null,
            "unidade_faturamento": "331",
            "marketplace": "",
            "ordem_compra": null,
            "status": "3",
            "descricao_status": "2",
            "data_criacao": "2022-12-21 10:56:13",
            "data_confirmacao": null,
            "confirmado_por": "Auto Sistema ",
            "codigo_vendedor": "0",
            "subtotal": "222.21",
            "acrescimos": "0.00",
            "valor_frete": "20.04",
            "pontos_utilizados": "",
            "descontos": "0.00",
            "total_pedido": "242.25",
            "pagamentos": [
                {
                    "status": "Capturado/Confirmado",
                    "codigo_pagamento": "B",
                    "codigo_meio_pagamento": "Z001",
                    "codigo_condicao_pagamento": "N028",
                    "bandeira": "02",
                    "acrescimos": null,
                    "valor": "242.25",
                    "forma_pagamento": "20",
                    "nome_forma_pagamento": "Cartão de Crédito - e-Rede",
                    "meio_pagamento": "1",
                    "nome_meio_pagamento": "Cartão de Crédito Master",
                    "condicao_pagamento": "2",
                    "cod_condicao_pagamento": "S02",
                    "adquirente": 10,
                    "numero_autorizacao_transacao": null,
                    "url_pdf_boleto": null,
                    "linha_digitavel_boleto": null,
                    "numero_documento_boleto": null,
                    "nsu_transacao": "627848833",
                    "tid_transacao": "10482212211042322412",
                    "nosso_numero": null,
                    "cupom_chave": null,
                    "desconto_pedido": "0.00",
                    "data_credito": "2022-12-21 10:57:12",
                    "digitos_cartao": "406669****2406"
                }
            ],
            "entregas": [
                {
                    "codigo_entrega": "51184",
                    "codigo_marketplace": "",
                    "cnpj_transportadora": "44914992003820",
                    "status": "nao-iniciada",
                    "codigo_filial": 8,
                    "forma_entrega": null,
                    "descricao_forma_entrega": "RTE Rodonaves",
                    "prazo": "2",
                    "prazo_em": "dias",
                    "previsao_entrega": null,
                    "data_envio": null,
                    "data_entrega": null,
                    "valor": "20.04",
                    "rastreio": "",
                    "itens": [
                        {
                            "sku": "410969",
                            "quantidade": 1,
                            "valor": "222.21",
                            "sku_associado": null
                        }
                    ],
                    "notas_fiscais": null
                }
            ],
            "dados_do_cliente": {
                "codigo_cliente": "29724",
                "nome": "Jefferson Maioli",
                "responsavel": null,
                "tipo": 1,
                "cpf_cnpj": "02354741936",
                "rg_ie": "68822181",
                "contribuinte": 0,
                "fone": "4532222222",
                "fone2": "45988123803",
                "email": "jmaioli@gmail.com",
                "sexo": null,
                "receber_ofertas": null,
                "receber_notificacoes": "1",
                "cep": "85803650",
                "logradouro": "RUA WENCESLAU BRAZ",
                "numero": "908",
                "complemento": "SOBRADO MEIO DA QUADRA",
                "bairro": "PARQUE SO PAULO",
                "cidade": "CASCAVEL",
                "uf": "PR",
                "ibge": "4104808"
            },
            "dados_da_entrega": {
                "nome": "Jefferson Maioli",
                "tipo": "1",
                "cep": "85803650",
                "logradouro": "RUA WENCESLAU BRAZ",
                "numero": "908",
                "complemento": "SOBRADO MEIO DA QUADRA",
                "bairro": "PARQUE SO PAULO",
                "cidade": "CASCAVEL",
                "uf": "PR",
                "obs": "",
                "ibge": "4104808"
            }
        }
    ]
}

```

## Pagamentos do Pedido

Os pedidos podem ter mais de uma forma de pagamento  
_Lista de informações do pagamento(GET)_

| nome | descricao | tipo |
| --- | --- | --- |
| status | situacao do pagamento | string |
| codigo_pagamento | codigo erp forma pagamento | string |
| codigo_meio_pagamento | codigo erp meio pagamento | string |
| codigo_condicao_pagamento | codigo erp condição pagamento | string |
| bandeira | código da bandeira do cartão | string |
| acrescimos | acréscimos aplicados ao pagament | floa |
| valor | valor do pagamento | float |
| forma_pagamento | codigo da forma de pagamento do pedido | int |
| nome_forma_pagamento | nome da forma de pagamento do pedido | string |
| meio_pagamento | codigo do meio de pagamento do pedido | int |
| nome_meio_pagamento | nome meio forma de pagamento do pedido | string |
| condicao_pagamento | numero de parcelas do pedido | int |
| adquirente | nome do adquirente/operadora | string |
| numero_autorizacao_transacao | numero da autorização da transação | string |
| numero_documento_boleto | número do documento do boleto | string |
| url_pdf_boleto | url do pdf do boleto | string |
| linha_digitavel_boleto | linha digitável do boleto | string |
| nsu_transacao | número sequencial único para a transação | string |
| tid_transacao | TID da transação | string |
| nosso_numero | Valor do nosso número do boleto | string |
| cupom_chave | código do cupom utilizado no pagamentoo | string |
| desconto_pedido | desconto aplicado ao pagamento | string |
| data_credito | data da captura ou crédito do pagamento | datetime |
| digitos_cartao | dados parciais do cartão de crédito | string |

_Exemplo_

```json
        "pagamentos":[
           {
          "status": "Capturado/Confirmado",
                    "codigo_pagamento": "18",
                    "bandeira": "02",
                    "acrescimos": null,
                    "valor": "242.25",
                    "forma_pagamento": "20",
                    "nome_forma_pagamento": "Cartão de Crédito - e-Rede",
                    "meio_pagamento": "1",
                    "nome_meio_pagamento": "Cartão de Crédito Master",
                    "condicao_pagamento": "2",
                    "cod_condicao_pagamento": "S02",
                    "adquirente": 10,
                    "numero_autorizacao_transacao": null,
                    "url_pdf_boleto": null,
                    "linha_digitavel_boleto": null,
                    "numero_documento_boleto": null,
                    "nsu_transacao": "627848833",
                    "tid_transacao": "10482212211042322412",
                    "nosso_numero": null,
                    "cupom_chave": null,
                    "desconto_pedido": "0.00",
                    "data_credito": "2022-12-21 10:57:12"     },
           {
             "status": "Capturado/Confirmado",
                    "codigo_pagamento": "18",
                    "bandeira": "02",
                    "acrescimos": null,
                    "valor": "242.25",
                    "forma_pagamento": "20",
                    "nome_forma_pagamento": "Cartão de Crédito - e-Rede",
                    "meio_pagamento": "1",
                    "nome_meio_pagamento": "Cartão de Crédito Master",
                    "condicao_pagamento": "2",
                    "cod_condicao_pagamento": "S02",
                    "adquirente": 10,
                    "numero_autorizacao_transacao": null,
                    "url_pdf_boleto": null,
                    "linha_digitavel_boleto": null,
                    "numero_documento_boleto": null,
                    "nsu_transacao": "627848833",
                    "tid_transacao": "10482212211042322412",
                    "nosso_numero": null,
                    "cupom_chave": null,
                    "desconto_pedido": "0.00",
                    "data_credito": "2022-12-21 10:57:12"
     }
     ]

```

## Entregas do Pedido

Os pedidos podem ter mais de uma entrega  
_Lista de informações do pagamento(GET/PUT)_

| nome | descricao | tipo |
| --- | --- | --- |
| codigo_entrega | codigo de identificão da entrega | int |
| codigo_marketplace | código da entrega informado pelo marketplace | string |
| status | situacao da entrega | string |
| codigo_filial | codigo da filial que está atendendo a entrega | int |
| forma_entrega | codigo da forma de entrega/transportadora selecionada para o pedido | int |
| descricao_forma_entrega | nome da transportadora selecionada para o pedido | string |
| prazo | prazo de entrega | int |
| prazo_em | prazo informado em dias ou horas | string |
| previsao_entrega | data prevista para a entrega | datetime |
| data_envio | data do envio da entrega | datetime |
| data_entrega | data da entrega | datetime |
| valor | valor cobrado pela entrega | float |
| rastreio | código de rastreio da entrega | string |
| itens | lista de itens da entrega | lista de itens do \* [e](#itens-pedido)ntrega |
| notas_fiscais | nota fiscal da entrega | string |

_Exemplo_

```json
   "entregas":[
        {
           "codigo_entrega":"593763",
           "status":"nao-iniciada",
           "codigo_filial":2,
           "forma_entrega":"78505",
           "descricao_forma_entrega":"(78505)BATEL TRANSPORTE LOGISTICA",
           "prazo":"3",
           "prazo_em":"dias",
           "previsao_entrega":null,
           "data_envio":null,
           "data_entrega":null,
           "valor":"0.00",
           "rastreio":null
  },
        {
           "codigo_entrega":"593764",
           "status":"separacao",
           "codigo_filial":13,
           "forma_entrega":"14",
           "descricao_forma_entrega":"(78505)Correios PAC",
           "prazo":"3",
           "prazo_em":"dias",
           "previsao_entrega":null,
           "data_envio":null,
           "data_entrega":null,
           "valor":"12.00",
           "rastreio":"XYZ1234EE"
  }

```

## itens da Entrega

Os pedidos podem ter mais de uma entrega  
_Lista de informações do pagamento(GET/PUT)_

| nome | descricao | tipo |
| --- | --- | --- |
| sku | codigo sku do produto | string |
| quantidade | quantidade | int |
| valor | valor unitario | double |
| sku_associado | sku associado(antigo) | string |

_Exemplo_

\`\`\`json

"itens": \[  
{  
"sku": "25968",  
"quantidade": 1,  
"valor": 79.99,  
"sku_associado":"6115"

```
},
{
        "sku": "1968",
        "quantidade": 3,
        "valor": 19.99,
        "sku_associado":"115",
        "codigo_entrega":"12346335"
    }
]

```

\`\`\`

## Status dos pedidos

**Todo o fluxo do pedido no lojista está vinculado a "status".**

Os status disponiveis são:

**status=1 | descricao_status:criado**: status inicial do pedido.

**status=2 | descricao_status:confirmado**: indica que pedido já teve o pagamento confirmado e que está pronto para a separação.

**status=3 | descricao_status:separacao**: indica que os itens do pedido já estão em processo de separação. A atualização para esse status é feito pelo fornecedor.

**status=4 | descricao_status:faturado**: indica que a nota fiscal do pedido já foi emitida. A atualização para esse status ocorre automaticante logo após o envio dos dados da NF pelo fornecedor.

**status=5 | descricao_status:disponvel**: indica que pedido esta pronto para a coleta pela transportadora ou disponível para o cleinte retirar no _local escolhido_

**status=6 | descricao_status:transporte**: indica que o forncedor já entregou o pedido a transportadora. A atualização para esse status é feito pelo fornecedor.

**status=7 | descricao_status:entregue**: Indica que o pedido que já foi entregue ao cliente final.

**status=8 | descricao_status:cancelado**: Indica que o pedidos foi cancelado. A atualização para esse status pode ser feito pelo o lojista ou pelo ou pelo fornecedor.

**status=9-problemas-entrega**: É o status que o pedido recebe quando por algum motivo a entrega não foi realizada.

:information_source: **Note** This endpoint does not require authentication.

```php
function listarPedidos(): void
```

## Response Type

`void`

## Example Usage

```php
$pedidosController->listarPedidos();
```


# Listar Um Pedido

Permite listar os dados de um determinado pedido

**`#GET /pedidos/{codigo}`**

| Nome | Descrição | Inf Adicional |
| --- | --- | --- |
| codigo | codigo do pedido na plataformaa |  |

:information_source: **Note** This endpoint does not require authentication.

```php
function listarUmPedido(): void
```

## Response Type

`void`

## Example Usage

```php
$pedidosController->listarUmPedido();
```


# Pedido

Permite listar os dados de um determinado pedido

**`#GET /tickets/pedidos/{codigo}`**

| Nome | Descrição | Inf Adicional |
| --- | --- | --- |
| codigo | codigo do pedido na plataformaa | campo obrigatório. |

:information_source: **Note** This endpoint does not require authentication.

```php
function pedido(string $codigo): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `codigo` | `string` | Template, Required | - |

## Response Type

[`Pedido[]`](../../doc/models/pedido.md)

## Example Usage

```php
$codigo = 'codigo4';

$result = $pedidosController->pedido($codigo);
```

## Example Response *(as JSON)*

```json
[
  {
    "codigo": "743864",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  }
]
```


# Pedidos Cpf

Permite listar os dados de um determinado pedido

**`#GET /tickets/pedidos/{cpf}`**

| Nome | Descrição | Inf Adicional |
| --- | --- | --- |
| cpf | codigo do pedido na plataformaa | campo obrigatório |

```php
function pedidosCpf(string $cpf): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cpf` | `string` | Template, Required | - |

## Response Type

[`NewRequest6[]`](../../doc/models/new-request-6.md)

## Example Usage

```php
$cpf = 'cpf0';

$result = $pedidosController->pedidosCpf($cpf);
```

## Example Response *(as JSON)*

```json
[
  {
    "codigo": "743864",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760809",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760812",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760816",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760832",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760834",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760852",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760862",
    "status": 1,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760864",
    "status": 1,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760868",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760890",
    "status": 1,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760908",
    "status": 1,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760912",
    "status": 1,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760913",
    "status": 1,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760918",
    "status": 1,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760919",
    "status": 1,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760920",
    "status": 1,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "760937",
    "status": 1,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761036",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761131",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761132",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761139",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761143",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761153",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761154",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761252",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761253",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761254",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761255",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761256",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761382",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761486",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761781",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  },
  {
    "codigo": "761793",
    "status": 8,
    "dados_do_cliente": {
      "nome": "Gustavo Cardoso",
      "tipo": 1,
      "cpf_cnpj": "*****************"
    }
  }
]
```

