
# Consulta Produtos

## Structure

`ConsultaProdutos`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `produtos` | [`Produtos`](../../doc/models/produtos.md) | Required | - | getProdutos(): Produtos | setProdutos(Produtos produtos): void |
| `brindes` | [`Brindes`](../../doc/models/brindes.md) | Required | - | getBrindes(): Brindes | setBrindes(Brindes brindes): void |

## Example (as JSON)

```json
{
  "produtos": {
    "id_campanha_brinde": "30",
    "sku": "968455",
    "nome": "Inversora de Solda digital KSI 130A Kala - Bivolt",
    "quantidade": "1"
  },
  "brindes": {
    "id_campanha_brinde": "30",
    "sku": "913820",
    "nome": "Inversora de Solda Arc 130A 913820 Worker"
  }
}
```

