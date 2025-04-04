
# Cadastrar Usuario Request

## Structure

`CadastrarUsuarioRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `codigo` | `int` | Required | - | getCodigo(): int | setCodigo(int codigo): void |
| `nome` | `string` | Required | - | getNome(): string | setNome(string nome): void |
| `login` | `string` | Required | - | getLogin(): string | setLogin(string login): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `nivel` | `string` | Required | - | getNivel(): string | setNivel(string nivel): void |
| `filiais` | [`Filiai[]`](../../doc/models/filiai.md) | Required | - | getFiliais(): array | setFiliais(array filiais): void |

## Example (as JSON)

```json
{
  "codigo": 5,
  "nome": "Teste Api2",
  "login": "teste api",
  "email": "beyin50980@pixiil.com",
  "nivel": "1",
  "filiais": [
    {
      "filial": "0"
    }
  ]
}
```

