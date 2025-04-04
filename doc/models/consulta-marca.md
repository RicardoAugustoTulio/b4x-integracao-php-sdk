
# Consulta Marca

## Structure

`ConsultaMarca`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `marcas` | [`Marca[]`](../../doc/models/marca.md) | Required | - | getMarcas(): array | setMarcas(array marcas): void |
| `brindes` | [`Brindes2[]`](../../doc/models/brindes-2.md) | Required | - | getBrindes(): array | setBrindes(array brindes): void |

## Example (as JSON)

```json
{
  "marcas": [
    {
      "campanha": "9",
      "nome": "ALBRAS",
      "quantidade": "3.00"
    }
  ],
  "brindes": [
    {
      "campanha": "9",
      "sku": "OLD_1003",
      "nome": "Furadeira de impacto 1/2' 600 watts 220v velocidade variável e reversível DV16VSSxb hitachi"
    }
  ]
}
```

