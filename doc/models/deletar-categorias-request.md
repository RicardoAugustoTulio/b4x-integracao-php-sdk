
# Deletar Categorias Request

## Structure

`DeletarCategoriasRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `categorias` | [`Categoria2[]`](../../doc/models/categoria-2.md) | Required | - | getCategorias(): array | setCategorias(array categorias): void |
| `brindes` | [`Brindes1[]`](../../doc/models/brindes-1.md) | Required | - | getBrindes(): array | setBrindes(array brindes): void |

## Example (as JSON)

```json
{
  "categorias": [
    {
      "id": "18"
    },
    {
      "id": "19"
    }
  ],
  "brindes": [
    {
      "sku": "913820"
    }
  ]
}
```

