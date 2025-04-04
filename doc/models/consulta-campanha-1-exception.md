
# Consulta Campanha 1 Exception

## Structure

`ConsultaCampanha1Exception`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `responseCode` | `string` | Required | - | getResponseCode(): string | setResponseCode(string responseCode): void |

## Example (as JSON)

```json
{
  "message": "Campanha não existente",
  "responseCode": "404"
}
```

