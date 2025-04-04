
# Cadastrar Categoria Request

## Structure

`CadastrarCategoriaRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `codigo` | `string` | Required | - | getCodigo(): string | setCodigo(string codigo): void |
| `descricao` | `string` | Required | - | getDescricao(): string | setDescricao(string descricao): void |
| `codigoPai` | `string` | Required | - | getCodigoPai(): string | setCodigoPai(string codigoPai): void |

## Example (as JSON)

```json
{
  "codigo": "1002",
  "descricao": "B4C sUBCategoria",
  "codigo_pai": "1001"
}
```

