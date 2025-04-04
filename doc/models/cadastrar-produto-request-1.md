
# Cadastrar Produto Request 1

## Structure

`CadastrarProdutoRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campanha` | `int` | Required | - | getCampanha(): int | setCampanha(int campanha): void |
| `sku` | `string` | Required | - | getSku(): string | setSku(string sku): void |
| `quantidade` | `int` | Required | - | getQuantidade(): int | setQuantidade(int quantidade): void |
| `desconto` | `int` | Required | - | getDesconto(): int | setDesconto(int desconto): void |

## Example (as JSON)

```json
{
  "campanha": 3,
  "sku": "LNGLHTL",
  "quantidade": 200,
  "desconto": 5
}
```

