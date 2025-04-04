
# New Request 7

## Structure

`NewRequest7`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `codigo` | `string` | Required | - | getCodigo(): string | setCodigo(string codigo): void |
| `boleto` | `string` | Required | - | getBoleto(): string | setBoleto(string boleto): void |
| `linhaDigitavel` | `string` | Required | - | getLinhaDigitavel(): string | setLinhaDigitavel(string linhaDigitavel): void |

## Example (as JSON)

```json
{
  "codigo": "325607",
  "boleto": "https://api.mundipagg.com/core/v1/transactions/tran_J1QOx55fJGSbW7oB/pdf",
  "linha_digitavel": "34191.75462 16716.561234 41234.510000 2 78350000029719"
}
```

