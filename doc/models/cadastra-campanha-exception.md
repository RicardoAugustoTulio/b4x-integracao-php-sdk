
# Cadastra Campanha Exception

## Structure

`CadastraCampanhaException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `responseCode` | `string` | Required | - | getResponseCode(): string | setResponseCode(string responseCode): void |

## Example (as JSON)

```json
{
  "message": "Bad Request - campanha já existente",
  "responseCode": "409"
}
```

