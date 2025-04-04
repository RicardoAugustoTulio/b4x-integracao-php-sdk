
# Atualizar Usuario Request

## Structure

`AtualizarUsuarioRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nome` | `string` | Required | - | getNome(): string | setNome(string nome): void |
| `login` | `string` | Required | - | getLogin(): string | setLogin(string login): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `nivel` | `string` | Required | - | getNivel(): string | setNivel(string nivel): void |
| `status` | `string` | Required | - | getStatus(): string | setStatus(string status): void |
| `filiais` | [`Filiai[]`](../../doc/models/filiai.md) | Required | - | getFiliais(): array | setFiliais(array filiais): void |

## Example (as JSON)

```json
{
  "nome": "Teste Api3",
  "login": "teste api",
  "email": "beyin50980@pixiil.com",
  "nivel": "1",
  "status": "0",
  "filiais": [
    {
      "filial": "0"
    }
  ]
}
```

