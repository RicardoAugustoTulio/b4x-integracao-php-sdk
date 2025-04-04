
# Atualizar Oferta Request

## Structure

`AtualizarOfertaRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nomeBrinde` | `string` | Required | - | getNomeBrinde(): string | setNomeBrinde(string nomeBrinde): void |
| `qtdeBrindes` | `string` | Required | - | getQtdeBrindes(): string | setQtdeBrindes(string qtdeBrindes): void |
| `statusBrindesOferta` | `int` | Required | - | getStatusBrindesOferta(): int | setStatusBrindesOferta(int statusBrindesOferta): void |

## Example (as JSON)

```json
{
  "nomeBrinde": "teste API oferta EDITADA",
  "qtdeBrindes": "2",
  "status_brindes_oferta": 1
}
```

