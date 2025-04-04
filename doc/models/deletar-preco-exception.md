
# Deletar Preco Exception

## Structure

`DeletarPrecoException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `string` | Required | - | getMessage(): string | setMessage(string message): void |
| `responseCode` | `string` | Required | - | getResponseCode(): string | setResponseCode(string responseCode): void |

## Example (as JSON)

```json
{
  "message": "Não existe preço cadastrado nessa campanha",
  "responseCode": "404"
}
```

