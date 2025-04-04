
# Cadastrar Endere O Request

## Structure

`CadastrarEndereORequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `clienteId` | `int` | Required | - | getClienteId(): int | setClienteId(int clienteId): void |
| `tipo` | `string` | Required | - | getTipo(): string | setTipo(string tipo): void |
| `cep` | `string` | Required | - | getCep(): string | setCep(string cep): void |
| `endereco` | `string` | Required | - | getEndereco(): string | setEndereco(string endereco): void |
| `numero` | `string` | Required | - | getNumero(): string | setNumero(string numero): void |
| `bairro` | `string` | Required | - | getBairro(): string | setBairro(string bairro): void |
| `cidade` | `string` | Required | - | getCidade(): string | setCidade(string cidade): void |
| `uf` | `string` | Required | - | getUf(): string | setUf(string uf): void |
| `complemento` | `string` | Required | - | getComplemento(): string | setComplemento(string complemento): void |
| `telefone` | `string` | Required | - | getTelefone(): string | setTelefone(string telefone): void |
| `padrao` | `int` | Required | - | getPadrao(): int | setPadrao(int padrao): void |

## Example (as JSON)

```json
{
  "cliente_id": 11,
  "tipo": "Residencial",
  "cep": "12345678",
  "endereco": "Rua das Flores",
  "numero": "123",
  "bairro": "Centro",
  "cidade": "Cidade Exemplo",
  "uf": "EX",
  "complemento": "Apto 101",
  "telefone": "(41) 98765-4321",
  "padrao": 1
}
```

