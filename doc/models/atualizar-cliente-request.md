
# Atualizar Cliente Request

## Structure

`AtualizarClienteRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nome` | `string` | Required | - | getNome(): string | setNome(string nome): void |
| `cpfCnpj` | `string` | Required | - | getCpfCnpj(): string | setCpfCnpj(string cpfCnpj): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `dataNascimento` | `string` | Required | - | getDataNascimento(): string | setDataNascimento(string dataNascimento): void |
| `telefone` | `string` | Required | - | getTelefone(): string | setTelefone(string telefone): void |
| `tipo` | `string` | Required | - | getTipo(): string | setTipo(string tipo): void |
| `rgIe` | `string` | Required | - | getRgIe(): string | setRgIe(string rgIe): void |
| `contribuinteIcms` | `string` | Required | - | getContribuinteIcms(): string | setContribuinteIcms(string contribuinteIcms): void |
| `revendaFerramentas` | `string` | Required | - | getRevendaFerramentas(): string | setRevendaFerramentas(string revendaFerramentas): void |
| `celular` | `string` | Required | - | getCelular(): string | setCelular(string celular): void |
| `receberEmails` | `string` | Required | - | getReceberEmails(): string | setReceberEmails(string receberEmails): void |

## Example (as JSON)

```json
{
  "nome": "cliente update api",
  "cpf_cnpj": "74637522080",
  "email": "teste@email.com",
  "data_nascimento": "2005-10-29",
  "telefone": "41996695000",
  "tipo": "1",
  "rg_ie": "1234",
  "contribuinte_icms": "0",
  "revenda_ferramentas": "0",
  "celular": "123",
  "receber_emails": "1"
}
```

