
# Cadastrar Acessorio Request

## Structure

`CadastrarAcessorioRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `produtoSku` | `string` | Required | - | getProdutoSku(): string | setProdutoSku(string produtoSku): void |
| `acessorioSku` | `string` | Required | - | getAcessorioSku(): string | setAcessorioSku(string acessorioSku): void |
| `base64` | `string` | Required | - | getBase64(): string | setBase64(string base64): void |

## Example (as JSON)

```json
{
  "produto_sku": "LNGLHTL",
  "acessorio_sku": "TMPBKSM",
  "base_64": "https://produto.jpg"
}
```

