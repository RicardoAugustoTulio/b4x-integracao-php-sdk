
# Consulta Preco

## Structure

`ConsultaPreco`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idOferta` | `int` | Required | - | getIdOferta(): int | setIdOferta(int idOferta): void |
| `statusCampanhaOferta` | `int` | Required | - | getStatusCampanhaOferta(): int | setStatusCampanhaOferta(int statusCampanhaOferta): void |
| `campanhaOferta` | `int` | Required | - | getCampanhaOferta(): int | setCampanhaOferta(int campanhaOferta): void |
| `agrupamentoCampanhaOferta` | int\|null\|string\|null | Required | This is a container for one-of cases. | getAgrupamentoCampanhaOferta(): | setAgrupamentoCampanhaOferta( agrupamentoCampanhaOferta): void |
| `tipoOfertaDesconto` | `int` | Required | - | getTipoOfertaDesconto(): int | setTipoOfertaDesconto(int tipoOfertaDesconto): void |
| `valorOferta` | float\|int | Required | This is a container for one-of cases. | getValorOferta(): | setValorOferta( valorOferta): void |
| `produtoOfertaDesconto` | `int` | Required | - | getProdutoOfertaDesconto(): int | setProdutoOfertaDesconto(int produtoOfertaDesconto): void |
| `prioridadeAtualizacaoOferta` | string\|null\|int\|null | Required | This is a container for one-of cases. | getPrioridadeAtualizacaoOferta(): | setPrioridadeAtualizacaoOferta( prioridadeAtualizacaoOferta): void |
| `createdAt` | `?string` | Required | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Required | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `regraAtivacaoValor` | `int` | Required | - | getRegraAtivacaoValor(): int | setRegraAtivacaoValor(int regraAtivacaoValor): void |
| `precoAtacado` | `?string` | Required | - | getPrecoAtacado(): ?string | setPrecoAtacado(?string precoAtacado): void |

## Example (as JSON)

```json
{
  "id_oferta": 18724734,
  "status_campanha_oferta": 1,
  "campanha_oferta": 1,
  "agrupamento_campanha_oferta": 0,
  "tipo_oferta_desconto": 3,
  "valor_oferta": 19.99,
  "produto_oferta_desconto": 23,
  "prioridade_atualizacao_oferta": "nao",
  "created_at": "created_at0",
  "updated_at": "2019-02-26 13:44:43",
  "regra_ativacao_valor": 0,
  "preco_atacado": "preco_atacado2"
}
```

