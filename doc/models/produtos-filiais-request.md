
# Produtos Filiais Request

## Structure

`ProdutosFiliaisRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sku` | `string` | Required | - | getSku(): string | setSku(string sku): void |
| `faturamento` | [`Faturamento[]`](../../doc/models/faturamento.md) | Required | - | getFaturamento(): array | setFaturamento(array faturamento): void |

## Example (as JSON)

```json
{
  "sku": "123",
  "faturamento": [
    {
      "unidade": 1,
      "logistica": [
        1,
        2,
        3
      ]
    }
  ]
}
```

