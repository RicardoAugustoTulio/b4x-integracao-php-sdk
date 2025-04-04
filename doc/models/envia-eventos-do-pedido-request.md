
# Envia Eventos Do Pedido Request

## Structure

`EnviaEventosDoPedidoRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `descricao` | `string` | Required | - | getDescricao(): string | setDescricao(string descricao): void |

## Example (as JSON)

```json
{
  "status": "nota-fiscal-emitida",
  "descricao": "nota emitida manualmente"
}
```

