
# Cadastra Oferta Request

## Structure

`CadastraOfertaRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idCampanhaBrindes` | `string` | Required | - | getIdCampanhaBrindes(): string | setIdCampanhaBrindes(string idCampanhaBrindes): void |
| `idOferta` | `string` | Required | - | getIdOferta(): string | setIdOferta(string idOferta): void |
| `nomeBrinde` | `string` | Required | - | getNomeBrinde(): string | setNomeBrinde(string nomeBrinde): void |
| `qtdeBrindes` | `string` | Required | - | getQtdeBrindes(): string | setQtdeBrindes(string qtdeBrindes): void |

## Example (as JSON)

```json
{
  "id_campanha_brindes": "20",
  "id_oferta": "30",
  "nomeBrinde": "teste API oferta",
  "qtdeBrindes": "1"
}
```

