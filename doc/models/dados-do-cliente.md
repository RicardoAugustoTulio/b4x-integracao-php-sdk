
# Dados Do Cliente

## Structure

`DadosDoCliente`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nome` | `string` | Required | - | getNome(): string | setNome(string nome): void |
| `tipo` | `int` | Required | - | getTipo(): int | setTipo(int tipo): void |
| `cpfCnpj` | `string` | Required | - | getCpfCnpj(): string | setCpfCnpj(string cpfCnpj): void |

## Example (as JSON)

```json
{
  "nome": "Gustavo Cardoso",
  "tipo": 1,
  "cpf_cnpj": "*****************"
}
```

