
# Cadastrar Produto Request

## Structure

`CadastrarProdutoRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ativoErp` | `int` | Required | - | getAtivoErp(): int | setAtivoErp(int ativoErp): void |
| `statusErp` | `string` | Required | - | getStatusErp(): string | setStatusErp(string statusErp): void |
| `sku` | `string` | Required | - | getSku(): string | setSku(string sku): void |
| `skuAssociado` | `string` | Required | - | getSkuAssociado(): string | setSkuAssociado(string skuAssociado): void |
| `paiId` | `string` | Required | - | getPaiId(): string | setPaiId(string paiId): void |
| `nome` | `string` | Required | - | getNome(): string | setNome(string nome): void |
| `nomeErp` | `string` | Required | - | getNomeErp(): string | setNomeErp(string nomeErp): void |
| `tituloSeo` | `string` | Required | - | getTituloSeo(): string | setTituloSeo(string tituloSeo): void |
| `titulo` | `string` | Required | - | getTitulo(): string | setTitulo(string titulo): void |
| `descricao` | `string` | Required | - | getDescricao(): string | setDescricao(string descricao): void |
| `codigoCategoria` | `string` | Required | - | getCodigoCategoria(): string | setCodigoCategoria(string codigoCategoria): void |
| `codigoMarca` | `string` | Required | - | getCodigoMarca(): string | setCodigoMarca(string codigoMarca): void |
| `palavrasChave` | `string` | Required | - | getPalavrasChave(): string | setPalavrasChave(string palavrasChave): void |
| `metaDescricao` | `string` | Required | - | getMetaDescricao(): string | setMetaDescricao(string metaDescricao): void |
| `codigoFabricante` | `string` | Required | - | getCodigoFabricante(): string | setCodigoFabricante(string codigoFabricante): void |
| `modelo` | `string` | Required | - | getModelo(): string | setModelo(string modelo): void |
| `prodReferencia` | `string` | Required | - | getProdReferencia(): string | setProdReferencia(string prodReferencia): void |
| `restricoes` | `string[]` | Required | - | getRestricoes(): array | setRestricoes(array restricoes): void |
| `produtosSugeridos` | `string[]` | Required | - | getProdutosSugeridos(): array | setProdutosSugeridos(array produtosSugeridos): void |
| `compreJunto` | `string[]` | Required | - | getCompreJunto(): array | setCompreJunto(array compreJunto): void |
| `categorias` | `int[]` | Required | - | getCategorias(): array | setCategorias(array categorias): void |
| `ean` | `string` | Required | - | getEan(): string | setEan(string ean): void |
| `dimensoes` | [`Dimensoes`](../../doc/models/dimensoes.md) | Required | - | getDimensoes(): Dimensoes | setDimensoes(Dimensoes dimensoes): void |
| `estoqueDiasSemVenda` | `string` | Required | - | getEstoqueDiasSemVenda(): string | setEstoqueDiasSemVenda(string estoqueDiasSemVenda): void |
| `estoqueDiasDisponivel` | `string` | Required | - | getEstoqueDiasDisponivel(): string | setEstoqueDiasDisponivel(string estoqueDiasDisponivel): void |
| `estoqueQuantidadeFaseCompra` | `string` | Required | - | getEstoqueQuantidadeFaseCompra(): string | setEstoqueQuantidadeFaseCompra(string estoqueQuantidadeFaseCompra): void |
| `precoCusto` | `string` | Required | - | getPrecoCusto(): string | setPrecoCusto(string precoCusto): void |
| `preco` | `string` | Required | - | getPreco(): string | setPreco(string preco): void |
| `unidadeVenda` | `string` | Required | - | getUnidadeVenda(): string | setUnidadeVenda(string unidadeVenda): void |
| `unidadeEmbalagem` | `int` | Required | - | getUnidadeEmbalagem(): int | setUnidadeEmbalagem(int unidadeEmbalagem): void |
| `vendaMinima` | `int` | Required | - | getVendaMinima(): int | setVendaMinima(int vendaMinima): void |
| `garantia` | `string` | Required | - | getGarantia(): string | setGarantia(string garantia): void |
| `codigoComprador` | `string` | Required | - | getCodigoComprador(): string | setCodigoComprador(string codigoComprador): void |
| `video` | `string` | Required | - | getVideo(): string | setVideo(string video): void |
| `produtoSubstituto` | `?string` | Required | - | getProdutoSubstituto(): ?string | setProdutoSubstituto(?string produtoSubstituto): void |
| `certificadoAutorizacaoCa` | `string` | Required | - | getCertificadoAutorizacaoCa(): string | setCertificadoAutorizacaoCa(string certificadoAutorizacaoCa): void |
| `kit` | [`Kit[]`](../../doc/models/kit.md) | Required | - | getKit(): array | setKit(array kit): void |
| `crossdocking` | `string` | Required | - | getCrossdocking(): string | setCrossdocking(string crossdocking): void |
| `estoquesRetira` | [`EstoquesRetira[]`](../../doc/models/estoques-retira.md) | Required | - | getEstoquesRetira(): array | setEstoquesRetira(array estoquesRetira): void |
| `estoques` | [`Estoque[]`](../../doc/models/estoque.md) | Required | - | getEstoques(): array | setEstoques(array estoques): void |
| `acessorios` | [`Acessorio[]`](../../doc/models/acessorio.md) | Required | - | getAcessorios(): array | setAcessorios(array acessorios): void |
| `personalizacoes` | [`Personalizaco[]`](../../doc/models/personalizaco.md) | Required | - | getPersonalizacoes(): array | setPersonalizacoes(array personalizacoes): void |
| `atributos` | [`Atributo[]`](../../doc/models/atributo.md) | Required | - | getAtributos(): array | setAtributos(array atributos): void |
| `imagens` | [`Imagen[]`](../../doc/models/imagen.md) | Required | - | getImagens(): array | setImagens(array imagens): void |
| `informacoesFiscais` | [`InformacoesFiscais`](../../doc/models/informacoes-fiscais.md) | Required | - | getInformacoesFiscais(): InformacoesFiscais | setInformacoesFiscais(InformacoesFiscais informacoesFiscais): void |

## Example (as JSON)

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
  "descricao": "<div style=\"text-align: justify;\">Rabeta para barco com motor de 4 tempos Toyama. Rabeta com motor para ser utilizada em barcos, proporcionando o arranque, movimenta&ccedil;&atilde;o e controle de dire&ccedil;&atilde;o em rios, lagos e entre outros ambientes alagados, inclusive com pouca profundidade. Kit composto por rabeta de 1,90 metro e motor a gasolina Toyama de 4 tempos.</div>",
  "codigo_categoria": "475",
  "codigo_marca": "144",
  "palavras_chave": "",
  "meta_descricao": "",
  "codigo_fabricante": "",
  "modelo": "",
  "prod_referencia": "TE70",
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
  "produto_substituto": "produto_substituto2",
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
      "arte_finalista": 1
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
    "ipi": "ipi8",
    "cfop": "",
    "ncm": "",
    "cest": "0",
    "cst": "",
    "icms": "0.00",
    "reducao_icms": "reducao_icms8",
    "icms_st": "0.00",
    "diferimento_parcial": "0.00",
    "mva": "0.00",
    "origem": "0",
    "tipo_origem": "",
    "csosn": "400"
  }
}
```

