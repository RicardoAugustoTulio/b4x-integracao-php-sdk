
# Cadastrar Filial Request 1

## Structure

`CadastrarFilialRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `codigo` | `int` | Required | - | getCodigo(): int | setCodigo(int codigo): void |
| `razaoSocial` | `string` | Required | - | getRazaoSocial(): string | setRazaoSocial(string razaoSocial): void |
| `cnpj` | `string` | Required | - | getCnpj(): string | setCnpj(string cnpj): void |
| `status` | `int` | Required | - | getStatus(): int | setStatus(int status): void |
| `prioridade` | `int` | Required | - | getPrioridade(): int | setPrioridade(int prioridade): void |
| `logisticas` | `string[]` | Required | - | getLogisticas(): array | setLogisticas(array logisticas): void |

## Example (as JSON)

```json
{
  "codigo": 1234,
  "razao_social": "teste b4c razao social alteracao",
  "cnpj": "123456789",
  "status": 1,
  "prioridade": 1,
  "logisticas": [
    "701",
    "700"
  ]
}
```

