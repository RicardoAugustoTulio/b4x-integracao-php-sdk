
# Consulta Oferta

## Structure

`ConsultaOferta`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idOferta` | `string` | Required | - | getIdOferta(): string | setIdOferta(string idOferta): void |
| `campanhaBrindes` | `string` | Required | - | getCampanhaBrindes(): string | setCampanhaBrindes(string campanhaBrindes): void |
| `statusBrindesOferta` | `string` | Required | - | getStatusBrindesOferta(): string | setStatusBrindesOferta(string statusBrindesOferta): void |
| `valorTotal` | `string` | Required | - | getValorTotal(): string | setValorTotal(string valorTotal): void |
| `qtdeBrindes` | `string` | Required | - | getQtdeBrindes(): string | setQtdeBrindes(string qtdeBrindes): void |
| `tipoValor` | `string` | Required | - | getTipoValor(): string | setTipoValor(string tipoValor): void |
| `nomeBrinde` | `string` | Required | - | getNomeBrinde(): string | setNomeBrinde(string nomeBrinde): void |
| `quantidadeTotalCarrinho` | `string` | Required | - | getQuantidadeTotalCarrinho(): string | setQuantidadeTotalCarrinho(string quantidadeTotalCarrinho): void |
| `valorTotalCarrinho` | `string` | Required | - | getValorTotalCarrinho(): string | setValorTotalCarrinho(string valorTotalCarrinho): void |

## Example (as JSON)

```json
{
  "id_oferta": "30",
  "campanha_brindes": "20",
  "status_brindes_oferta": "1",
  "valorTotal": "0.00",
  "qtdeBrindes": "1",
  "tipoValor": "0",
  "nomeBrinde": "teste API oferta",
  "quantidade_total_carrinho": "0",
  "valor_total_carrinho": "0.00"
}
```

