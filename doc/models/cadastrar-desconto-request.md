
# Cadastrar Desconto Request

## Structure

`CadastrarDescontoRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cpfCnpj` | `string` | Required | - | getCpfCnpj(): string | setCpfCnpj(string cpfCnpj): void |
| `titulo` | `string` | Required | - | getTitulo(): string | setTitulo(string titulo): void |
| `tipoDesconto` | `int` | Required | - | getTipoDesconto(): int | setTipoDesconto(int tipoDesconto): void |
| `desconto` | `int` | Required | - | getDesconto(): int | setDesconto(int desconto): void |
| `inicio` | `string` | Required | - | getInicio(): string | setInicio(string inicio): void |
| `fim` | `string` | Required | - | getFim(): string | setFim(string fim): void |

## Example (as JSON)

```json
{
  "cpf_cnpj": "08113640975",
  "titulo": "GOLD",
  "tipo_desconto": 1,
  "desconto": 17,
  "inicio": "2024-08-07 12:15:10",
  "fim": "2024-09-06 12:15:10"
}
```

