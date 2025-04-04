
# Cadastra Marca Request

## Structure

`CadastraMarcaRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tipo` | `int` | Required | - | getTipo(): int | setTipo(int tipo): void |
| `valorTotal` | `string` | Required | - | getValorTotal(): string | setValorTotal(string valorTotal): void |
| `marcas` | [`Marca1[]`](../../doc/models/marca-1.md) | Required | - | getMarcas(): array | setMarcas(array marcas): void |
| `brindes` | [`Brindes1[]`](../../doc/models/brindes-1.md) | Required | - | getBrindes(): array | setBrindes(array brindes): void |

## Example (as JSON)

```json
{
  "tipo": 1,
  "valorTotal": "20",
  "marcas": [
    {
      "id": "2",
      "quantidade": "5"
    },
    {
      "id": "13",
      "quantidade": "1"
    }
  ],
  "brindes": [
    {
      "sku": "123123"
    }
  ]
}
```

