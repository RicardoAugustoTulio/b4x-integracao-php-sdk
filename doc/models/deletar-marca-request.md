
# Deletar Marca Request

## Structure

`DeletarMarcaRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `marcas` | [`Marca2[]`](../../doc/models/marca-2.md) | Required | - | getMarcas(): array | setMarcas(array marcas): void |
| `brindes` | `array[]` | Required | - | getBrindes(): array | setBrindes(array brindes): void |

## Example (as JSON)

```json
{
  "marcas": [
    {
      "id": 13
    },
    {
      "id": 12
    },
    {
      "id": 2
    }
  ],
  "brindes": [
    {}
  ]
}
```

