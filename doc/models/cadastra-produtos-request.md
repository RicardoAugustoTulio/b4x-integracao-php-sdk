
# Cadastra Produtos Request

## Structure

`CadastraProdutosRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `produtos` | [`Produto[]`](../../doc/models/produto.md) | Required | - | getProdutos(): array | setProdutos(array produtos): void |
| `brindes` | [`Brinde[]`](../../doc/models/brinde.md) | Required | - | getBrindes(): array | setBrindes(array brindes): void |

## Example (as JSON)

```json
{
  "produtos": [
    {
      "sku": "943109",
      "quantidade": "1"
    }
  ],
  "brindes": [
    {
      "sku": "867597"
    }
  ]
}
```

