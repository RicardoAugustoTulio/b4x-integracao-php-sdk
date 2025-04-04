
# Cadastra Categorias Request

## Structure

`CadastraCategoriasRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tipo` | `int` | Required | - | getTipo(): int | setTipo(int tipo): void |
| `valorTotal` | `string` | Required | - | getValorTotal(): string | setValorTotal(string valorTotal): void |
| `categorias` | [`Categoria1[]`](../../doc/models/categoria-1.md) | Required | - | getCategorias(): array | setCategorias(array categorias): void |
| `brindes` | [`Brindes1[]`](../../doc/models/brindes-1.md) | Required | - | getBrindes(): array | setBrindes(array brindes): void |

## Example (as JSON)

```json
{
  "tipo": 1,
  "valorTotal": "20",
  "categorias": [
    {
      "id": "18",
      "quantidade": "1"
    },
    {
      "id": "19",
      "quantidade": "2"
    }
  ],
  "brindes": [
    {
      "sku": "867597"
    }
  ]
}
```

