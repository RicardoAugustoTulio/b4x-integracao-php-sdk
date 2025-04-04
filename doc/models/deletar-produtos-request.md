
# Deletar Produtos Request

## Structure

`DeletarProdutosRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `produtos` | [`Produtos1[]`](../../doc/models/produtos-1.md) | Required | - | getProdutos(): array | setProdutos(array produtos): void |
| `brindes` | [`Brindes1[]`](../../doc/models/brindes-1.md) | Required | - | getBrindes(): array | setBrindes(array brindes): void |

## Example (as JSON)

```json
{
  "produtos": [
    {
      "sku": "968455"
    }
  ],
  "brindes": [
    {
      "sku": "913820"
    }
  ]
}
```

