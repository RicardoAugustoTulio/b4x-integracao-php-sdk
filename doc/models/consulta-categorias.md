
# Consulta Categorias

## Structure

`ConsultaCategorias`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `categorias` | [`Categoria[]`](../../doc/models/categoria.md) | Required | - | getCategorias(): array | setCategorias(array categorias): void |
| `brindes` | [`Brindes2[]`](../../doc/models/brindes-2.md) | Required | - | getBrindes(): array | setBrindes(array brindes): void |

## Example (as JSON)

```json
{
  "categorias": [
    {
      "campanha": "6",
      "nome": "Abraçadeiras",
      "quantidade": "0"
    }
  ],
  "brindes": [
    {
      "campanha": "6",
      "sku": "123136",
      "nome": "Macaco Hidráulico Jacaré 2Ton J2301 Bovenau - Com Maleta"
    },
    {
      "campanha": "6",
      "sku": "137498",
      "nome": "VULCANIZADORA PARA CÂMARAS DE AUTOMÓVEIS/CAMINHÕES 110V V300C EMEB"
    },
    {
      "campanha": "6",
      "sku": "OLD_1007",
      "nome": "TORQUES ARMADOR 12\" FAMASTIL"
    }
  ]
}
```

