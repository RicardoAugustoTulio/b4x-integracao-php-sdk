# Produtos

## Produtos

*Query parameters*

| API |  Descrição |  
|------------|---------|  
| GET /produtos/?={Offest}&Limit={Limit} |  Retorna todos os produtos |  
| GET /produtos/precos/?={Offest}&Limit={Limit} |  Retorna os preços de todos os produtos |  
| GET /produtos/estoques/?={Offest}&Limit={Limit} |  Retorna os estoques de todos os produtos |  
| GET /produtos/?={id} | Retorna informações do produto  informado |  
| GET /produtos/precos/?={id} | Retorna o preço do produto  informado |  
| GET /produtos/estoques/?={id} | Retorna estoque do produto  informado |  
| POST /produtos | Cadastra um novo produto |  
| PUT /produtos/{codigo} |  Atualiza as informações do produto |  
| DELETE/produtos/{codigo} | Atualiza o status do produto para inativo |

```php
$produtosController = $client->getProdutosController();
```

## Class Name

`ProdutosController`

## Methods

* [Cadastrar Produto](../../doc/controllers/produtos.md#cadastrar-produto)
* [Atualizar Produto](../../doc/controllers/produtos.md#atualizar-produto)
* [Excluir Produto](../../doc/controllers/produtos.md#excluir-produto)
* [Listar Produtos](../../doc/controllers/produtos.md#listar-produtos)
* [Listar Estoques](../../doc/controllers/produtos.md#listar-estoques)
* [Atualizar Estoque](../../doc/controllers/produtos.md#atualizar-estoque)
* [Cadastrar Acessorio](../../doc/controllers/produtos.md#cadastrar-acessorio)
* [Cadastra Produtos](../../doc/controllers/produtos.md#cadastra-produtos)
* [Consulta Produtos](../../doc/controllers/produtos.md#consulta-produtos)
* [Deletar Produtos](../../doc/controllers/produtos.md#deletar-produtos)
* [Cadastra Produtos 1](../../doc/controllers/produtos.md#cadastra-produtos-1)
* [Consulta Produtos 1](../../doc/controllers/produtos.md#consulta-produtos-1)
* [Deletar Produtos 1](../../doc/controllers/produtos.md#deletar-produtos-1)
* [Cadastrar Produto 1](../../doc/controllers/produtos.md#cadastrar-produto-1)
* [Deletar Produto](../../doc/controllers/produtos.md#deletar-produto)


# Cadastrar Produto

**`#POST /produtos`**  
_Cadastra informações de um novo produto_

_Requisição_

_Body_

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| ativo_erp | Informe se o produto está ativo ou inativo no ERP | boolean | nao |
| status_erp | status do produto no ERP | int | nao |
| sku | sku do produto | string | sim |
| pai_id | sku do principal | string | nao |
| sku_associado | sku do produto que sera relacionado pelo atributo principal | string | nao |
| nome_erp | nome do produto no erp | string (200) | sim |
| nome | nome do produto no site/comercial | string | nao |
| titulo_seo | titulo seo do produto | string | nao |
| titulo | titulo do produto | string | nao |
| descricao | descrição do produto | string | nao |
| metaDescricao | meta description do produto | string | nao |
| codigo_categoria | codigo da categoria | int | nao |
| categorias | codigo das categorias adicionais | array | nao |
| codigo_marca | codigo da marca o | string | sim |
| palavras_chave | palavras chave para o produto | string | nao |
| meta_descricao | meta descricao para o produto | string | nao |
| codigo_fabricante | codigo do produto no fabricante | string | nao |
| modelo | modelo do produto | string | nao |
| prod_referencia | referencia do produto no fabricante | string | nao |
| produtos_sugeridos | Sugestões de produtos similares | array de string | nao |
| compre_junto | Produtos para venda casada | array de string | nao |
| ean | ean do produto | string | nao |
| dimensoes | lista peso as dimensões do produto para o envio | lista de \* [dimensoes](#api-dimensoes-do-produto) | sim |
| estoque_dias_sem_venda | Dias sem venda consolidado | int | nao |
| estoque_dias_disponivel | Dias de estoque disponivel consolidado | int | nao |
| estoque_quantidade_fase_compra | Qauntidade total em fase | int | nao |
| preco_custo | preco de custo do produto | float | nao |
| preco | preco padrão de venda do produto | float | nao |
| unidade_venda | unidade de venda para o produto | string | nao |
| unidade_embalagem | quantidade de unidades da embalagem | int | nao |
| venda_minima | quantidade minima que pode ser vendida do produto | int | nao |
| garantia | identificador do tipo de garantia do produto | int | nao |
| codigo_comprador | codigo do comprador resposalvel pelo produto no ERP | int | nao |
| video | id do video no Youtube | string | nao |
| produto_substituto | sku produto substituto | string | nao |
| certificado_autorizacao_ca | codigo CA do produto | string |  |
| kit | composição do kit | lista de \* [composicao_kit](#api-composicao-do-kit) | nao |
| crossdocking | produto tamnbém disponível em crossdocking default false | boolean | nao |
| estoques | estoques do produto | lista de \* [estoques](#api-estoques-do-produto) | nao |
| estoques_retira | quantidade de estoque para retirada nas lojas | lista de \* estoques | nao |
| atributos | lista de atributos do produto | lista de \* [atributos](#api-atributos-do-produto) | nao |
| imagens | lista de imagens do produto | lista de \* [imagens](#api-imagens-do-produto) | nao |
| informacoes_fiscais | lista de informações fiscais para o produto | lista de \* [informacoesFiscais](#api-informacoes-fiscais) | nao |
| acessorios | lista de acessorios do produto | lista de \* acessorios | nao |
| personalizacoes | itens vinculados a personalizacoes | array de string com os SKU's | nao |
| restricoes | lista de restrições do produto | array de string | nao |
| link_externo | Link externo do produto | string | nao |

_Exemplo_

```json
{
    "ativo_erp": 1,
    "status_erp": "15",
    "sku": "1467831897",
    "sku_associado": "2130",
    "pai_id": "2130",
    "nome": "Rabeta para barco com motor de 7HP Gasolina",
    "nome_erp": "Rabeta  barco c/ motor de 7HP ",
    "titulo_seo": "",
    "titulo": "",
    "descricao": "Rabeta para barco com motor de 4 tempos Toyama. Rabeta com motor para ser utilizada em barcos, proporcionando o arranque, movimentação e controle de direção em rios, lagos e entre outros ambientes alagados, inclusive com pouca profundidade. Kit composto por rabeta de 1,90 metro e motor a gasolina Toyama de 4 tempos.",
    "codigo_categoria": "475",
    "codigo_marca": "144",
    "palavras_chave": "",
    "meta_descricao": "",
    "codigo_fabricante": "",
    "modelo": "",
    "prod_referencia": "TE70",
    "link_externo": "https://www.b4x.com.br/",
    "restricoes": [
        "armas",
        "inflamavel",
        "produtos_toxicos",
        "sem_embalagem",
        "transporte_de_valores",
        "produto_fragil",
        "restricao"
    ],
    "produtos_sugeridos": [
        "SKU1",
        "SKU2",
        "SKU3",
        "SKU4"
    ],
    "compre_junto": [
        "124497-PTO-M",
        "124497-PTO-P",
        "124497-PTO-3G"
    ],
    "categorias": [
        1,
        2,
        3,
        4
    ],
    "ean": "7898438025299",
    "dimensoes": {
        "altura": "24.00",
        "largura": "24.00",
        "comprimento": "210.00",
        "peso": "44.0000"
    },
    "estoque_dias_sem_venda": "0",
    "estoque_dias_disponivel": "0",
    "estoque_quantidade_fase_compra": "0",
    "preco_custo": "750.1200",
    "preco": "750.12",
    "unidade_venda": "KIT",
    "unidade_embalagem": 1,
    "venda_minima": 50,
    "garantia": "0",
    "codigo_comprador": "3",
    "video": "",
    "produto_substituto": null,
    "certificado_autorizacao_ca": "0",
    "kit": [
        {
            "sku": "19368",
            "nome_erp": "RABETA P/ MOTOR 5,5/6,5CV HELICE 7,5 1,9M RT-1900B TOYAMA",
            "quantidade": "1",
            "desconto": "0.00"
        },
        {
            "sku": "5915",
            "nome_erp": "MOTOR GASOLINA 7,0HP REFRIG AR TE70 TOYAMA",
            "quantidade": "1",
            "desconto": "0.00"
        }
    ],
    "crossdocking": "0",
    "estoques_retira": [
        {
            "filial_erp": "1",
            "quantidade": "0",
            "considerar_estoque": "1",
            "lote_id": "123"
        },
        {
            "filial_erp": "2",
            "quantidade": "0",
            "considerar_estoque": "1",
            "lote_id": "123"
        }
    ],
    "estoques": [
        {
            "filial_erp": "1",
            "quantidade": "0",
            "estoque_dias_sem_venda": "0",
            "estoque_dias_disponivel": "0",
            "estoque_quantidade_fase_compra": "0",
            "quantidade_vendida": "0",
            "considerar_estoque": "1",
            "crossdocking": "0",
            "quantidade_televenda": "111",
            "deposito_externo": 1,
            "estoque_externo": "100",
            "lote_id": "123"
        },
        {
            "filial_erp": "2",
            "quantidade": "0",
            "estoque_dias_sem_venda": "0",
            "estoque_dias_disponivel": "0",
            "estoque_quantidade_fase_compra": "0",
            "quantidade_vendida": "0",
            "considerar_estoque": "1",
            "crossdocking": "0",
            "quantidade_televenda": "111",
            "deposito_externo": 1,
            "estoque_externo": "100",
            "lote_id": "123"
        },
        {
            "filial_erp": "3",
            "quantidade": "0",
            "estoque_dias_sem_venda": "0",
            "estoque_dias_disponivel": "0",
            "estoque_quantidade_fase_compra": "0",
            "quantidade_vendida": "0",
            "considerar_estoque": "0",
            "crossdocking": "0",
            "quantidade_televenda": "111",
            "deposito_externo": 1,
            "estoque_externo": "100",
            "lote_id": "123"
        },
        {
            "filial_erp": "4",
            "quantidade": "0",
            "estoque_dias_sem_venda": "0",
            "estoque_dias_disponivel": "0",
            "estoque_quantidade_fase_compra": "0",
            "quantidade_vendida": "0",
            "considerar_estoque": "1",
            "crossdocking": "0",
            "quantidade_televenda": "111",
            "deposito_externo": 1,
            "estoque_externo": "100",
            "lote_id": "123"
        }
    ],
    "acessorios": [
        {
            "sku": "TMPBKSG",
            "img": "https://produto.jpg",
            "obrigatorio": 1
        },
        {
            "sku": "TMPBKSM",
            "img": "https://produto.jpg",
            "obrigatorio": 0
        }
    ],
    "personalizacoes": [
        {
            "sku": "TCAGL18868",
            "nivel": 1,
            "tipo": 1,
            "arte_finalista": 0
        },
        {
            "sku": "PERSO0101",
            "nivel": 1,
            "tipo": 1,
            "arte_finalista": 1 //AQUI VOCE DEFINE SE ESSE PRODUTO VAI SER APENAS O PRODUTO DE SELEÇÃO DO VALOR DA ARTE
        }
    ],
    "atributos": [
        {
            "nome": "Cor",
            "valor": "Preto"
        }
    ],
    "imagens": [
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_11.jpg",
            "ordem": "2"
        },
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_1.jpg",
            "ordem": "1"
        },
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_3.jpg",
            "ordem": "1"
        },
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_5.jpg",
            "ordem": "1"
        },
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_7.jpg",
            "ordem": "1"
        },
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_9.jpg",
            "ordem": "1"
        }
    ],
    "informacoes_fiscais": {
        "ipi": null,
        "cfop": "",
        "ncm": "",
        "cest": "0",
        "cst": "",
        "icms": "0.00",
        "reducao_icms": null,
        "icms_st": "0.00",
        "diferimento_parcial": "0.00",
        "mva": "0.00",
        "origem": "0",
        "tipo_origem": "",
        "csosn": "400"
    }
}

```

_Resposta_

```
| HTTP Status Code | Descricao | Resposta | json |
|------|-----------|----------|------------- |
| 201 | Produto cadastrado com Sucesso | id do produto no lojista | {1254|
| 4xx | Requisição inválida | mensagem | {"os campo sku obrigatorio"} |
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br "} |
```json
     {
         "id":1,
         "mensagem":"Produto cadastrado com sucesso"
     }

```

\`\`\`

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarProduto(CadastrarProdutoRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarProdutoRequest`](../../doc/models/cadastrar-produto-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = CadastrarProdutoRequestBuilder::init(
    1,
    '15',
    '1467831897',
    '2130',
    '2130',
    'Rabeta para barco com motor de 7HP Gasolina',
    'Rabeta  barco c/ motor de 7HP ',
    '',
    '',
    '<div style="text-align: justify;">Rabeta para barco com motor de 4 tempos Toyama. Rabeta com motor para ser utilizada em barcos, proporcionando o arranque, movimenta&ccedil;&atilde;o e controle de dire&ccedil;&atilde;o em rios, lagos e entre outros ambientes alagados, inclusive com pouca profundidade. Kit composto por rabeta de 1,90 metro e motor a gasolina Toyama de 4 tempos.</div>',
    '475',
    '144',
    '',
    '',
    '',
    '',
    'TE70',
    [
        'armas',
        'inflamavel',
        'produtos_toxicos',
        'sem_embalagem',
        'transporte_de_valores',
        'produto_fragil',
        'restricao'
    ],
    [
        'SKU1',
        'SKU2',
        'SKU3',
        'SKU4'
    ],
    [
        '124497-PTO-M',
        '124497-PTO-P',
        '124497-PTO-3G'
    ],
    [
        1,
        2,
        3,
        4
    ],
    '7898438025299',
    DimensoesBuilder::init(
        '24.00',
        '24.00',
        '210.00',
        '44.0000'
    )->build(),
    '0',
    '0',
    '0',
    '750.1200',
    '750.12',
    'KIT',
    1,
    50,
    '0',
    '3',
    '',
    '0',
    [
        KitBuilder::init(
            '19368',
            'RABETA P/ MOTOR 5,5/6,5CV HELICE 7,5 1,9M RT-1900B TOYAMA',
            '1',
            '0.00'
        )->build(),
        KitBuilder::init(
            '5915',
            'MOTOR GASOLINA 7,0HP REFRIG AR TE70 TOYAMA',
            '1',
            '0.00'
        )->build()
    ],
    '0',
    [
        EstoquesRetiraBuilder::init(
            '1',
            '0',
            '1',
            '123'
        )->build(),
        EstoquesRetiraBuilder::init(
            '2',
            '0',
            '1',
            '123'
        )->build()
    ],
    [
        EstoqueBuilder::init(
            '1',
            '0',
            '0',
            '0',
            '0',
            '0',
            '1',
            '0',
            '111',
            1,
            '100',
            '123'
        )->build(),
        EstoqueBuilder::init(
            '2',
            '0',
            '0',
            '0',
            '0',
            '0',
            '1',
            '0',
            '111',
            1,
            '100',
            '123'
        )->build(),
        EstoqueBuilder::init(
            '3',
            '0',
            '0',
            '0',
            '0',
            '0',
            '0',
            '0',
            '111',
            1,
            '100',
            '123'
        )->build(),
        EstoqueBuilder::init(
            '4',
            '0',
            '0',
            '0',
            '0',
            '0',
            '1',
            '0',
            '111',
            1,
            '100',
            '123'
        )->build()
    ],
    [
        AcessorioBuilder::init(
            'TMPBKSG',
            'https://produto.jpg',
            1
        )->build(),
        AcessorioBuilder::init(
            'TMPBKSM',
            'https://produto.jpg',
            0
        )->build()
    ],
    [
        PersonalizacoBuilder::init(
            'TCAGL18868',
            1,
            1,
            0
        )->build(),
        PersonalizacoBuilder::init(
            'PERSO0101',
            1,
            1,
            1
        )->build()
    ],
    [
        AtributoBuilder::init(
            'Cor',
            'Preto'
        )->build()
    ],
    [
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_11.jpg',
            '2'
        )->build(),
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_1.jpg',
            '1'
        )->build(),
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_3.jpg',
            '1'
        )->build(),
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_5.jpg',
            '1'
        )->build(),
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_7.jpg',
            '1'
        )->build(),
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_9.jpg',
            '1'
        )->build()
    ],
    InformacoesFiscaisBuilder::init(
        '',
        '',
        '0',
        '',
        '0.00',
        '0.00',
        '0.00',
        '0.00',
        '0',
        '',
        '400'
    )
        ->ipi('ipi8')
        ->reducaoIcms('reducao_icms8')
        ->build()
)
    ->produtoSubstituto('produto_substituto8')
    ->build();

$produtosController->cadastrarProduto($body);
```


# Atualizar Produto

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| sku | SKU do produto que deseja atualizar | string | sim |
| ativo_erp | Informe se o produto está ativo ou inativo no ERP | boolean | nao |
| status_erp | status do produto no ERP | int | nao |
| pai_id | sku do principal | string | nao |
| sku_associado | sku do produto que sera relacionado pelo atributo principal | string | nao |
| nome_erp | nome do produto no erp | string | sim |
| nome | nome do produto no site/comercial | string | nao |
| titulo_seo | titulo do produto | string | nao |
| titulo | titutlo do produto | string | nao |
| descricao | descrição do produto | string | nao |
| metaDescricao | meta description do produto | string | nao |
| codigo_grupo | codigo do grupo | int | nao |
| codigo_categoria | codigo da categoria | int | nao |
| categorias | codigo das categorias adicionais | array | nao |
| codigo_subcategoria | codigo da subcategoria | int | nao |
| codigo_marca | codigo da marca o | string | sim |
| palavras_chave | palavras chave para o produto | string | nao |
| meta_descricao | meta descricao para o produto | string | nao |
| codigo_fabricante | codigo do produto no fabricante | string | nao |
| modelo | modelo do produto | string | nao |
| prod_referencia | referencia do produto no fabricante | string | nao |
| produtos_sugeridos | Sugestões de produtos semelhantes. | array de string | nao |
| compre_junto | Produtos para venda casada | array de string | nao |
| ean | código de barras do produto | string | nao |
| dimensoes | lista peso as dimensões do produto para o envio | lista de \* [dimensoes](#api-dimensoes-do-produto) | sim |
| estoque_dias_sem_venda | Dias sem venda consolidado | int | nao |
| estoque_dias_disponivel | Dias de estoque disponivel consolidado | int | nao |
| estoque_quantidade_fase_compra | Qauntidade total em fase | int | nao |
| preco_custo | preco de custo do produto | float | nao |
| preco | preco padrão de venda do produto | float | nao |
| unidade_venda | unidade de venda para o produto | string | nao |
| unidade_embalagem | quantidade de unidades da embalagem | int | nao |
| venda_minima | quantidade minima de venda | int | nao |
| garantia | identificador do tipo de garantia do produto | int | nao |
| codigo_comprador | codigo do comprador resposalvel pelo produto no ERP | int | nao |
| video | id do video no Youtube | string | nao |
| produto_substituto | sku produto substituto | string | nao |
| certificado_autorizacao_ca | codigo CA do produto | string |  |
| kit | composição do kit | lista de \* [composicao_kit](#api-composicao-do-kit) | nao |
| crossdocking | produto tamnbém disponível em crossdocking default false | boolean | nao |
| estoques | estoques do produto | lista de \* [estoques](#api-estoques-do-produto) | nao |
| estoques_retira | quantidade de estoque para retirada nas lojas | lista de \* estoques |  |
| atributos | lista de atributos do produto | lista de \* [atributos](#api-atributos-do-produto) | nao |
| imagens | lista de imagens do produto | lista de \* [imagens](#api-imagens-do-produto) | nao |
| informacoes_fiscais | lista de informações fiscais para o produto | lista de \* [informacoesFiscais](#api-informacoes-fiscais) | nao |
| acessorios | acessorios do produto | lista de \* acessorios | nao |
| personalizacoes | personalizacoes vinculada ao produto | array de string | nao |
| restricoes | restrições do produto | array de string | nao |
| link_externo | Link externo do produto | string | nao |

_Exemplo_

```json
{
    "ativo_erp": 1,
    "status_erp": "15",
    "sku": "1467831897",
    "skus_associado": "2130",
    "pai_id": "2130",
    "nome": "Rabeta para barco com motor de 7HP Gasolina",
    "nome_erp": "Rabeta  barco c/ motor de 7HP ",
    "titulo_seo": "",
    "titulo": "",
    "descricao": "Rabeta para barco com motor de 4 tempos Toyama. Rabeta com motor para ser utilizada em barcos, proporcionando o arranque, movimentação e controle de direção em rios, lagos e entre outros ambientes alagados, inclusive com pouca profundidade. Kit composto por rabeta de 1,90 metro e motor a gasolina Toyama de 4 tempos.",
    "codigo_categoria": "475",
    "codigo_marca": "144",
    "palavras_chave": "",
    "meta_descricao": "",
    "codigo_fabricante": "",
    "modelo": "",
    "prod_referencia": "TE70",
    "link_externo": "https://www.b4x.com.br/",
    "restricoes": [
        "armas",
        "inflamavel",
        "produtos_toxicos",
        "sem_embalagem",
        "transporte_de_valores",
        "produto_fragil",
        "restricao"
    ],
    "compre_junto": [
        "124497-PTO-M",
        "124497-PTO-P",
        "124497-PTO-3G"
    ],
    "produtos_sugeridos": [
        "SKU1",
        "SKU2",
        "SKU3",
        "SKU4"
    ],
    "categorias": [
        1,
        2,
        3,
        4
    ],
    "ean": "7898438025299",
    "dimensoes": {
        "altura": "24.00",
        "largura": "24.00",
        "comprimento": "210.00",
        "peso": "44.0000"
    },
    "estoque_dias_sem_venda": "0",
    "estoque_dias_disponivel": "0",
    "estoque_quantidade_fase_compra": "0",
    "preco_custo": "750.1200",
    "preco": "750.12",
    "unidade_venda": "KIT",
    "unidade_embalagem": 1,
    "venda_minima": 50,
    "garantia": "0",
    "codigo_comprador": "3",
    "video": "",
    "produto_substituto": null,
    "certificado_autorizacao_ca": "0",
    "kit": [
        {
            "sku": "19368",
            "nome_erp": "RABETA P/ MOTOR 5,5/6,5CV HELICE 7,5 1,9M RT-1900B TOYAMA",
            "quantidade": "1",
            "desconto": "0.00"
        },
        {
            "sku": "5915",
            "nome_erp": "MOTOR GASOLINA 7,0HP REFRIG AR TE70 TOYAMA",
            "quantidade": "1",
            "desconto": "0.00"
        }
    ],
    "crossdocking": "0",
    "estoques_retira": [
        {
            "filial_erp": "1",
            "quantidade": "0",
            "considerar_estoque": "1",
            "lote_id": "123"
        },
        {
            "filial_erp": "2",
            "quantidade": "0",
            "considerar_estoque": "1",
            "lote_id": "123"
        }
    ],
    "estoques": [
        {
            "filial_erp": "1",
            "quantidade": "0",
            "estoque_dias_sem_venda": "0",
            "estoque_dias_disponivel": "0",
            "estoque_quantidade_fase_compra": "0",
            "quantidade_vendida": "0",
            "considerar_estoque": "1",
            "crossdocking": "0",
            "quantidade_televenda": "111",
            "deposito_externo": 1,
            "estoque_externo": "100",
            "lote_id": "123"
        },
        {
            "filial_erp": "2",
            "quantidade": "0",
            "estoque_dias_sem_venda": "0",
            "estoque_dias_disponivel": "0",
            "estoque_quantidade_fase_compra": "0",
            "quantidade_vendida": "0",
            "considerar_estoque": "1",
            "crossdocking": "0",
            "quantidade_televenda": "111",
            "deposito_externo": 1,
            "estoque_externo": "100",
            "lote_id": "123"
        },
        {
            "filial_erp": "3",
            "quantidade": "0",
            "estoque_dias_sem_venda": "0",
            "estoque_dias_disponivel": "0",
            "estoque_quantidade_fase_compra": "0",
            "quantidade_vendida": "0",
            "considerar_estoque": "0",
            "crossdocking": "0",
            "quantidade_televenda": "111",
            "deposito_externo": 1,
            "estoque_externo": "100",
            "lote_id": "123"
        },
        {
            "filial_erp": "4",
            "quantidade": "0",
            "estoque_dias_sem_venda": "0",
            "estoque_dias_disponivel": "0",
            "estoque_quantidade_fase_compra": "0",
            "quantidade_vendida": "0",
            "considerar_estoque": "1",
            "crossdocking": "0",
            "quantidade_televenda": "111",
            "deposito_externo": 1,
            "estoque_externo": "100",
            "lote_id": "123"
        }
    ],
    "acessorios": [
        {
            "sku": "TMPBKSG",
            "img": "https://produto.jpg",
            "obrigatorio": 1
        },
        {
            "sku": "TMPBKSM",
            "img": "https://produto.jpg",
            "obrigatorio": 0
        }
    ],
    "personalizacoes": [
        {
            "sku": "TCAGL18868",
            "nivel": 1,
            "tipo": 1,
            "arte_finalista": 0
        },
        {
            "sku": "PERSO0101",
            "nivel": 1,
            "tipo": 1,
            "arte_finalista": 1 //AQUI VOCE DEFINE SE ESSE PRODUTO VAI SER APENAS O PRODUTO DE SELEÇÃO DO VALOR DA ARTE
        }
    ],
    "atributos": [
        {
            "nome": "Cor",
            "valor": "Preto"
        }
    ],
    "imagens": [
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_11.jpg",
            "ordem": "2"
        },
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_1.jpg",
            "ordem": "1"
        },
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_3.jpg",
            "ordem": "1"
        },
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_5.jpg",
            "ordem": "1"
        },
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_7.jpg",
            "ordem": "1"
        },
        {
            "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_9.jpg",
            "ordem": "1"
        }
    ],
    "informacoes_fiscais": {
        "ipi": null,
        "cfop": "",
        "ncm": "",
        "cest": "0",
        "cst": "",
        "icms": "0.00",
        "reducao_icms": null,
        "icms_st": "0.00",
        "diferimento_parcial": "0.00",
        "mva": "0.00",
        "origem": "0",
        "tipo_origem": "",
        "csosn": "400"
    }
}

```

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarProduto(AtualizarProdutoRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarProdutoRequest`](../../doc/models/atualizar-produto-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = AtualizarProdutoRequestBuilder::init(
    1,
    '15',
    '1467831897',
    '2130',
    '2130',
    'Rabeta para barco com motor de 7HP Gasolina',
    'Rabeta  barco c/ motor de 7HP ',
    '',
    '',
    '<div style="text-align: justify;">Rabeta para barco com motor de 4 tempos Toyama. Rabeta com motor para ser utilizada em barcos, proporcionando o arranque, movimenta&ccedil;&atilde;o e controle de dire&ccedil;&atilde;o em rios, lagos e entre outros ambientes alagados, inclusive com pouca profundidade. Kit composto por rabeta de 1,90 metro e motor a gasolina Toyama de 4 tempos.</div>',
    '475',
    '144',
    '',
    '',
    '',
    '',
    'TE70',
    [
        'armas',
        'inflamavel',
        'produtos_toxicos',
        'sem_embalagem',
        'transporte_de_valores',
        'produto_fragil',
        'restricao'
    ],
    [
        '124497-PTO-M',
        '124497-PTO-P',
        '124497-PTO-3G'
    ],
    [
        'SKU1',
        'SKU2',
        'SKU3',
        'SKU4'
    ],
    [
        1,
        2,
        3,
        4
    ],
    '7898438025299',
    DimensoesBuilder::init(
        '24.00',
        '24.00',
        '210.00',
        '44.0000'
    )->build(),
    '0',
    '0',
    '0',
    '750.1200',
    '750.12',
    'KIT',
    1,
    50,
    '0',
    '3',
    '',
    '0',
    [
        KitBuilder::init(
            '19368',
            'RABETA P/ MOTOR 5,5/6,5CV HELICE 7,5 1,9M RT-1900B TOYAMA',
            '1',
            '0.00'
        )->build(),
        KitBuilder::init(
            '5915',
            'MOTOR GASOLINA 7,0HP REFRIG AR TE70 TOYAMA',
            '1',
            '0.00'
        )->build()
    ],
    '0',
    [
        EstoquesRetiraBuilder::init(
            '1',
            '0',
            '1',
            '123'
        )->build(),
        EstoquesRetiraBuilder::init(
            '2',
            '0',
            '1',
            '123'
        )->build()
    ],
    [
        EstoqueBuilder::init(
            '1',
            '0',
            '0',
            '0',
            '0',
            '0',
            '1',
            '0',
            '111',
            1,
            '100',
            '123'
        )->build(),
        EstoqueBuilder::init(
            '2',
            '0',
            '0',
            '0',
            '0',
            '0',
            '1',
            '0',
            '111',
            1,
            '100',
            '123'
        )->build(),
        EstoqueBuilder::init(
            '3',
            '0',
            '0',
            '0',
            '0',
            '0',
            '0',
            '0',
            '111',
            1,
            '100',
            '123'
        )->build(),
        EstoqueBuilder::init(
            '4',
            '0',
            '0',
            '0',
            '0',
            '0',
            '1',
            '0',
            '111',
            1,
            '100',
            '123'
        )->build()
    ],
    [
        AcessorioBuilder::init(
            'TMPBKSG',
            'https://produto.jpg',
            1
        )->build(),
        AcessorioBuilder::init(
            'TMPBKSM',
            'https://produto.jpg',
            0
        )->build()
    ],
    [
        PersonalizacoBuilder::init(
            'TCAGL18868',
            1,
            1,
            0
        )->build(),
        PersonalizacoBuilder::init(
            'PERSO0101',
            1,
            1,
            1
        )->build()
    ],
    [
        AtributoBuilder::init(
            'Cor',
            'Preto'
        )->build()
    ],
    [
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_11.jpg',
            '2'
        )->build(),
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_1.jpg',
            '1'
        )->build(),
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_3.jpg',
            '1'
        )->build(),
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_5.jpg',
            '1'
        )->build(),
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_7.jpg',
            '1'
        )->build(),
        ImagenBuilder::init(
            'https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_9.jpg',
            '1'
        )->build()
    ],
    InformacoesFiscaisBuilder::init(
        '',
        '',
        '0',
        '',
        '0.00',
        '0.00',
        '0.00',
        '0.00',
        '0',
        '',
        '400'
    )
        ->ipi('ipi8')
        ->reducaoIcms('reducao_icms8')
        ->build()
)
    ->produtoSubstituto('produto_substituto8')
    ->build();

$produtosController->atualizarProduto($body);
```


# Excluir Produto

### Remover Produtos

*`#DELETE/produtos/{id}`*

**Requisição  
**Parâmetros da Url

| Nome | Descrição | Tipo  | Obrigatório|  
|------------|---------|-------------------|-------------|  
| id | id da produto | int | Sim |

*Body  
N/A

*Resposta*

| HTTP Status Code | Descricao | Resposta | json |  
|------|-----------|----------|------------- |  
| 200 | Produto removido com Sucesso | mensagem | {"Produto removido com sucesso"}|  
| 4xx | Requisição inválida | mensagem | {"produto nao encontrado"}|  
| 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.com.br "} |

``json

       {                                                                                                                 
                                                                                                                       
          "mensagem": "Produto removido com sucesso"                                                                     
    }                                                                                                                  

```
                                                                                                                         
                                                                                                                         
Atributos do Produto
```

:information_source: **Note** This endpoint does not require authentication.

```php
function excluirProduto(): void
```

## Response Type

`void`

## Example Usage

```php
$produtosController->excluirProduto();
```


# Listar Produtos

### Listar Produtos

**`#GET /produtos/?={Offest}&Limit={Limit}`

*Retorna todos os produtos*

*Parâmetros da Url*

| Nome | Descrição | Tipo  | Inf Adicional |
|------------|---------|---------------|-----------------|
| Offset | Ignora os primeiros { Offset } itens | Integer | |
| Limit | Define a quantidade de registros | Integer | 200 registros |

**Listar um produto específico**

*Parâmetros da Url*

**`#GET /produtos/{id}`**

**Retorna informações sobre um produto cadastrado

| Nome | Descrição | Tipo  | Obrigatório|
|------------|---------|-----------------|---------------|
| id | id do produto | int | Sim |

*Resposta*

| nome | descricao | tipo |
|------|-----------|------|
| ativo_erp | Informe se o produto está ativo ou inativo no ERP boolean |
| status | status do produto na loja virtual | int |
| status_erp | status do produto no ERP | int |
| codigo | codigo do produto no na loja virtual| int |
| sku | codigo/sku do produto no ERP  |  string |
| pai_id | id do produto pai | int |
| nome_erp | nome do produto no erp | string |
| nome | nome do produto site/comercial | string |
| titulo_seo| titulo do produto | string |
| descricao | descrição do produto | string |
| codigo_grupo | codigo do grupo | string |
| codigo_categoria | codigo da categoria | string |
| codigo_subcategoria | codigo da subcategoria | string |
| codigo_marca | codigo da marca o  | string |
| palavras_chave | palavras chave para o produto | string |
| meta_descricao | meta description do produto | string |
| codigo_fabricante | codigo do produto no fabricante | string |
| modelo | modelo do produto | string |
| referencia | referencia do produto no fabricante | string |
| ean | código de barras do produto | string |
| dimensoes | lista o peso as dimensões do produto com a embalagem |  lista de * [dimensoes](#api-dimensoes-do-produto) |
| disponivel | disponivel para venda | boolean |
| estoque_dias_sem_venda | Dias sem venda consolidado | int |
| estoque_dias_disponivel | Dias de estoque disponivel consolidado | int |
| estoque_quantidade_fase_compra | Qauntidade total em fase | int |
| preco_custo |  preco de custo do produto | float |
| preco | precos padrão de venda do produto | float |
| unidade_venda | unidade de venda para o produto | string |
| garantia | identificador do tipo de garantia do produto | int |
| codigo_comprador | codigo do comprador resposalvel pelo produto no ERP | int |
| video | id do video no Youtube | string |
| produto_substituto | sku produto substituto | string |
| certificado_autorizacao_ca | codigo CA do produto | string |
| kit | |  lista de * [composicao_kit](#api-composicao-do-kit) |
| crossdocking | produto tamnbém disponível em crossdocking  | boolean |  
| imagens | lista de imagens do produto| lista de * [imagens](#api-imagens-do-produto)|
| estoques | lista de estoques do produto| lista de * [estoques](#api-estoques-do-produto)|
| atributos | lista de atributos do produto| lista de * [atributos](#api-atributos-do-produto)|
| informacoes_fiscais | lista de informações fiscais para o produto | lista de * [informacoesFiscais](#api-informacoes-fiscais)|

*Output*

```json

 "produtos": [
     {
         "status": "6",
         "status_erp": "1",
         "codigo": "104645",
         "sku": "1467831897",
         "pai_id": null,
         "nome": "Rabeta para barco com motor de 7HP Gasolina",
         "nome_erp": null,
         "titulo_seo": "",
         "descricao": "<div style=\"text-align: justify;\">Rabeta para barco com motor de 4 tempos Toyama. Rabeta com motor para ser utilizada em barcos, proporcionando o arranque, movimenta&ccedil;&atilde;o e controle de dire&ccedil;&atilde;o em rios, lagos e entre outros ambientes alagados, inclusive com pouca profundidade. Kit composto por rabeta de 1,90 metro e motor a gasolina Toyama de 4 tempos.</div>",
         "codigo_grupo": "35",
         "codigo_categoria": "475",
         "codigo_subcategoria": "0",
         "codigo_marca": "144",
         "palavras_chave": "",
         "meta_descricao": "",
         "codigo_fabricante": "",
         "modelo": "",
         "referencia": "TE70",
         "ean": "7898438025299",
         "dimensoes": {
             "altura": "24.00",
             "largura": "24.00",
             "comprimento": "210.00",
             "peso": "44.0000"
         },
         "estoque_dias_sem_venda": "0",
         "estoque_dias_disponivel": "0",
         "estoque_quantidade_fase_compra": "0",
         "preco_custo": "750.1200",
         "preco": "750.12",
         "unidade_venda": "KIT",
         "garantia": "0",
         "codigo_comprador": "3",
         "video": "",
         "produto_substituto": null,
         "certificado_autorizacao_ca": "0",
         "kit": [
             {
                 "sku": "19368",
                 "nome_erp": "RABETA P/ MOTOR 5,5/6,5CV HELICE 7,5 1,9M RT-1900B TOYAMA",
                 "quantidade": "1",
                 "desconto": "0.00"
             },
             {
                 "sku": "5915",
                 "nome_erp": "MOTOR GASOLINA 7,0HP REFRIG AR TE70 TOYAMA",
                 "quantidade": "1",
                 "desconto": "0.00"
             }
         ],
         "crossdocking": "0",
         "estoques": [
             {
                 "filial": "1",
                 "quantidade": "0",
                 "estoque_dias_sem_venda": "0",
                 "estoque_dias_disponivel": "0",
                 "estoque_quantidade_fase_compra": "0",
                 "quantidade_vendida": "0",
                 "considerar_estoque": "1",
                 "crossdocking": "0"
             },
             {
                 "filial": "2",
                 "quantidade": "0",
                 "estoque_dias_sem_venda": "0",
                 "estoque_dias_disponivel": "0",
                 "estoque_quantidade_fase_compra": "0",
                 "quantidade_vendida": "0",
                 "considerar_estoque": "1",
                 "crossdocking": "0"
             },
             {
                 "filial": "3",
                 "quantidade": "0",
                 "estoque_dias_sem_venda": "0",
                 "estoque_dias_disponivel": "0",
                 "estoque_quantidade_fase_compra": "0",
                 "quantidade_vendida": "0",
                 "considerar_estoque": "0",
                 "crossdocking": "0"
             },
             {
                 "filial": "4",
                 "quantidade": "0",
                 "estoque_dias_sem_venda": "0",
                 "estoque_dias_disponivel": "0",
                 "estoque_quantidade_fase_compra": "0",
                 "quantidade_vendida": "0",
                 "considerar_estoque": "1",
                 "crossdocking": "0"
             }
         ],
         "atributos": "",
         "imagens": [
             {
                 "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_11.jpg",
                 "ordem": "2"
             },
             {
                 "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_1.jpg",
                 "ordem": "1"
             },
             {
                 "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_3.jpg",
                 "ordem": "1"
             },
             {
                 "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_5.jpg",
                 "ordem": "1"
             },
             {
                 "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_7.jpg",
                 "ordem": "1"
             },
             {
                 "imagem": "https://static.ferramentaskennedy.com.br/storage/original/rabeta-para-barco-com-motor-de-7hp-gasolina_9.jpg",
                 "ordem": "1"
             }
         ],
         "informacoes_fiscais": {
             "ipi": null,
             "cfop": "",
             "ncm": "",
             "cest": "0",
             "cst": "",
             "icms": "0.00",
             "reducao_icms": null,
             "icms_st": "0.00",
             "diferimento_parcial": "0.00",
             "mva": "0.00",
             "origem": "0",
             "tipo_origem": "",
             "csosn": "400"
         }
     }
 ]
}
```

:information_source: **Note** This endpoint does not require authentication.

```php
function listarProdutos(): void
```

## Response Type

`void`

## Example Usage

```php
$produtosController->listarProdutos();
```


# Listar Estoques

### Lista os estoques dos produtos

**`#GET /produtos/estoques/?offest={offest}&Limit={Limit}

*Retorna os estoques todos os produtos*

*Parâmetros da Url*

| Nome | Descrição | Tipo  | Inf Adicional |
|------------|---------|-----------------|---------------|
| Offset | Ignora os primeiros { Offset } itens | Integer | |
| Limit | Define a quantidade de registros | Integer | 200 registros |

**Listar os estoques produto específico**

*Parâmetros da Url*

**`#GET /produtos/estoques/{id}`**

**Retorna informações sobre um produto cadastrado

| Nome | Descrição | Tipo  | Obrigatório|
|------------|---------|-------------------|-------------|
| sku | sku do produto | string | Sim |

*Resposta*

| nome | descricao | tipo |
|------|-----------|------|

*Output*

```json

   { "estoques": [
             {
                 "filial": "1",
                 "quantidade": "0",
                 "estoque_dias_sem_venda": "0",
                 "estoque_dias_disponivel": "0",
                 "estoque_quantidade_fase_compra": "0",
                 "quantidade_vendida": "0",
                 "considerar_estoque": "1",
                 "crossdocking": "0"
             },
             {
                 "filial": "2",
                 "quantidade": "0",
                 "estoque_dias_sem_venda": "0",
                 "estoque_dias_disponivel": "0",
                 "estoque_quantidade_fase_compra": "0",
                 "quantidade_vendida": "0",
                 "considerar_estoque": "1",
                 "crossdocking": "0"
             },
             {
                 "filial": "3",
                 "quantidade": "0",
                 "estoque_dias_sem_venda": "0",
                 "estoque_dias_disponivel": "0",
                 "estoque_quantidade_fase_compra": "0",
                 "quantidade_vendida": "0",
                 "considerar_estoque": "0",
                 "crossdocking": "0"
             },
             {
                 "filial": "4",
                 "quantidade": "0",
                 "estoque_dias_sem_venda": "0",
                 "estoque_dias_disponivel": "0",
                 "estoque_quantidade_fase_compra": "0",
                 "quantidade_vendida": "0",
                 "considerar_estoque": "1",
                 "crossdocking": "0"
             }
         ]
}
```

:information_source: **Note** This endpoint does not require authentication.

```php
function listarEstoques(): void
```

## Response Type

`void`

## Example Usage

```php
$produtosController->listarEstoques();
```


# Atualizar Estoque

### Atualiza os estoques dos produtos

**\`#PUT /produtos/estoques/{sku}

_Parâmetros da Url_

| Nome | Descrição | Tipo | Obrigatório |
| --- | --- | --- | --- |
| sku | código sku do produto | string | sim |

_Requisição\*\\Exemplo_

```json
{
    "estoques": [
        {
            "filial_erp": "1",
            "quantidade": "1",
            "estoque_dias_sem_venda": "0",
            "estoque_dias_disponivel": "0",
            "estoque_quantidade_fase_compra": "0",
            "quantidade_vendida": "10",
            "considerar_estoque": "1",
            "crossdocking": "0",
            "quantidade_televenda": "111",
            "deposito_externo": 1,
            "estoque_externo": "100",
            "lote_id": "123"
        },
        {
            "filial_erp": "2",
            "quantidade": "11",
            "estoque_dias_sem_venda": "0",
            "estoque_dias_disponivel": "0",
            "estoque_quantidade_fase_compra": "0",
            "quantidade_vendida": "10",
            "considerar_estoque": "1",
            "crossdocking": "0",
            "quantidade_televenda": "111",
            "deposito_externo": 1,
            "estoque_externo": "100",
            "lote_id": "123"
        }
    ],
    "estoques_retira": [
        {
            "filial_erp": "1",
            "quantidade": "1",
            "considerar_estoque": "1"
        },
        {
            "filial_erp": "2",
            "quantidade": "1",
            "considerar_estoque": "1"
        }
    ]
}     

```

:information_source: **Note** This endpoint does not require authentication.

```php
function atualizarEstoque(AtualizarEstoqueRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AtualizarEstoqueRequest`](../../doc/models/atualizar-estoque-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = AtualizarEstoqueRequestBuilder::init(
    [
        EstoqueBuilder::init(
            '1',
            '1',
            '0',
            '0',
            '0',
            '10',
            '1',
            '0',
            '111',
            1,
            '100',
            '123'
        )->build(),
        EstoqueBuilder::init(
            '2',
            '11',
            '0',
            '0',
            '0',
            '10',
            '1',
            '0',
            '111',
            1,
            '100',
            '123'
        )->build()
    ],
    [
        EstoquesRetira2Builder::init(
            '1',
            '1',
            '1'
        )->build(),
        EstoquesRetira2Builder::init(
            '2',
            '1',
            '1'
        )->build()
    ]
)->build();

$produtosController->atualizarEstoque($body);
```


# Cadastrar Acessorio

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarAcessorio(CadastrarAcessorioRequest $body): CadastrarAcessorio
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarAcessorioRequest`](../../doc/models/cadastrar-acessorio-request.md) | Body, Required | - |

## Response Type

[`CadastrarAcessorio`](../../doc/models/cadastrar-acessorio.md)

## Example Usage

```php
$body = CadastrarAcessorioRequestBuilder::init(
    'LNGLHTL',
    'TMPBKSM',
    'https://produto.jpg'
)->build();

$result = $produtosController->cadastrarAcessorio($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Imagem cadastrada com sucesso",
  "responseCode": "201"
}
```


# Cadastra Produtos

# Cadastro de produtos e seus brindes - será vinculado as ofertas

**/brindes/produtos/{codigo_da_oferta}**

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| produtos | array dos produtos que serão considerados para obter os brindes | array | nao |
| produtos.sku | codigo do produto | string | sim |
| produtos.quantidade | quantidade de produtos necessária para ativar os brindes | int | sim |
| brindes | array com os produtos que serão ofertados como brindes | array | nao |
| brindes.sku | codigo do produto | string | sim |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraProdutos(CadastraProdutosRequest $body): CadastraProdutos
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraProdutosRequest`](../../doc/models/cadastra-produtos-request.md) | Body, Required | - |

## Response Type

[`CadastraProdutos`](../../doc/models/cadastra-produtos.md)

## Example Usage

```php
$body = CadastraProdutosRequestBuilder::init(
    [
        ProdutoBuilder::init(
            '943109',
            '1'
        )->build()
    ],
    [
        BrindeBuilder::init(
            '867597'
        )->build()
    ]
)->build();

$result = $produtosController->cadastraProdutos($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Produtos cadastrados com sucesso",
  "responseCode": "200"
}
```


# Consulta Produtos

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaProdutos(): ConsultaProdutos
```

## Response Type

[`ConsultaProdutos`](../../doc/models/consulta-produtos.md)

## Example Usage

```php
$result = $produtosController->consultaProdutos();
```

## Example Response *(as JSON)*

```json
{
  "produtos": {
    "id_campanha_brinde": "30",
    "sku": "968455",
    "nome": "Inversora de Solda digital KSI 130A Kala - Bivolt",
    "quantidade": "1"
  },
  "brindes": {
    "id_campanha_brinde": "30",
    "sku": "913820",
    "nome": "Inversora de Solda Arc 130A 913820 Worker"
  }
}
```


# Deletar Produtos

# Deletar produtos e seus brindes

**/brindes/produtos/{codigo_da_oferta}**

| nome | descricao | tipo | obrigatorio |
|------|-----------|------|----------|
| produtos | array dos produtos a ser deletado | array | nao |
| produtos.sku | codigo do produto | string | sim |
| brindes | array com os produtos a ser deletados | array | nao |
| brindes.sku | codigo do produto | string | sim |

:information_source: **Note** This endpoint does not require authentication.

```php
function deletarProdutos(DeletarProdutosRequest $body): DeletarProdutos
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeletarProdutosRequest`](../../doc/models/deletar-produtos-request.md) | Body, Required | - |

## Response Type

[`DeletarProdutos`](../../doc/models/deletar-produtos.md)

## Example Usage

```php
$body = DeletarProdutosRequestBuilder::init(
    [
        Produtos1Builder::init(
            '968455'
        )->build()
    ],
    [
        Brindes1Builder::init(
            '913820'
        )->build()
    ]
)->build();

$result = $produtosController->deletarProdutos($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Produtos deletados com sucesso",
  "responseCode": "200"
}
```


# Cadastra Produtos 1

# Cadastro de produtos na campanha

**/leve-mais-por-menos/produtos/{id_da_campanha}**

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| sku | codigo do produto | string | sim |

**Descrição dos campos**

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| produtos | codigos dos produtos para vincular a campanha | array | sim |

exemplo do payload

```json
{
    "produtos": [
        "123136",
        "137498"
    ]
}

```

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastraProdutos1(CadastraProdutosRequest1 $body): CadastraProdutos
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastraProdutosRequest1`](../../doc/models/cadastra-produtos-request-1.md) | Body, Required | - |

## Response Type

[`CadastraProdutos`](../../doc/models/cadastra-produtos.md)

## Example Usage

```php
$body = CadastraProdutosRequest1Builder::init(
    [
        '123136',
        '137498'
    ]
)->build();

$result = $produtosController->cadastraProdutos1($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Produtos cadastrados com sucesso",
  "responseCode": "200"
}
```


# Consulta Produtos 1

###Listar Skus da Campanha

*`GET /leve-mais-por-menos/produtos/{id}`*

**Retorna todos os skus cadastrados na campanha fornecedor
**Requisição
**Parâmetros da Url

| Nome | Descrição | Tipo  | Obrigatório|
|------------|---------|------------------|--------------|
| id | código identificador da canpanha | string | Sim |

*Resposta*

| nome | descricao | tipo |
|------|-----------|------|
| sku | skus cadastrados na campanha | array |

*Output*

```json
{
    "produtos": [
        {
            "sku": "968455"
          
        },
        {
            "sku": "2"
          
        }
    ]
   
    
}
```

:information_source: **Note** This endpoint does not require authentication.

```php
function consultaProdutos1(): array
```

## Response Type

[`ConsultaProdutos1[]`](../../doc/models/consulta-produtos-1.md)

## Example Usage

```php
$result = $produtosController->consultaProdutos1();
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
    "percentual_desconto": "100.00",
    "produtos_levemais": "123136,137498"
  }
]
```


# Deletar Produtos 1

# Deletar produtos da campanha

**/leve-mais-por-menos/produtos/{id}**

\*_Requisição__\*_Parâmetros da Url

| Nome | Descrição | Tipo | Obrigatório |
| --- | --- | --- | --- |
| id | codigo identificador da campanha | int | Sim |

_body_

| nome | descricao | tipo | obrigatorio |
| --- | --- | --- | --- |
| produtos | array dos produtos a ser deletado | array | sim |

_Resposta_

| HTTP Status Code | Descricao | Resposta | json |
| --- | --- | --- | --- |
| 200 | produto removida com Sucesso | mensagem | {"produto removido com sucesso"} |
| 4xx | Requisição inválida | mensagem | {"produto nao encontrado"} |
| 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.com.br](mailto:suporte@b4commerce.com.br) "} |

```json
        {
           "mensagem": "produto removida com sucesso"
        }

```

:information_source: **Note** This endpoint does not require authentication.

```php
function deletarProdutos1(DeletarProdutosRequest1 $body): DeletarProdutos
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeletarProdutosRequest1`](../../doc/models/deletar-produtos-request-1.md) | Body, Required | - |

## Response Type

[`DeletarProdutos`](../../doc/models/deletar-produtos.md)

## Example Usage

```php
$body = DeletarProdutosRequest1Builder::init(
    [
        '123136'
    ]
)->build();

$result = $produtosController->deletarProdutos1($body);
```

## Example Response *(as JSON)*

```json
{
  "message": "Produtos removidos com sucesso",
  "responseCode": "201"
}
```


# Cadastrar Produto 1

| **Campo** | **Descrição** |
| --- | --- |
| campanha | id da campanha que será relacionado |
| sku | sku do produto |
| quantidade | quantidade que será acionado o desconto |
| desconto | % de desconto que será aplicado |

:information_source: **Note** This endpoint does not require authentication.

```php
function cadastrarProduto1(CadastrarProdutoRequest1 $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CadastrarProdutoRequest1`](../../doc/models/cadastrar-produto-request-1.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = CadastrarProdutoRequest1Builder::init(
    3,
    'LNGLHTL',
    200,
    5
)->build();

$produtosController->cadastrarProduto1($body);
```


# Deletar Produto

| **Campo** | **Descrição** |
| --- | --- |
| campanha | id da campanha que será relacionado |
| sku | sku do produto |
| quantidade | quantidade que será acionado o desconto |
| desconto | % de desconto que será aplicado |

:information_source: **Note** This endpoint does not require authentication.

```php
function deletarProduto(DeletarProdutoRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeletarProdutoRequest`](../../doc/models/deletar-produto-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = DeletarProdutoRequestBuilder::init(
    'LNGLHTL'
)->build();

$produtosController->deletarProduto($body);
```

