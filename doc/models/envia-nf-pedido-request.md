
# Envia NF Pedido Request

## Structure

`EnviaNFPedidoRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `operacao` | `string` | Required | - | getOperacao(): string | setOperacao(string operacao): void |
| `numero` | `string` | Required | - | getNumero(): string | setNumero(string numero): void |
| `nf` | `string` | Required | - | getNf(): string | setNf(string nf): void |
| `xml` | `string` | Required | - | getXml(): string | setXml(string xml): void |

## Example (as JSON)

```json
{
  "operacao": "",
  "numero": "1500",
  "nf": "41200900915086000263550040000149881885575321",
  "xml": ""
}
```

