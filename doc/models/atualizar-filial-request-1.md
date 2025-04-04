
# Atualizar Filial Request 1

## Structure

`AtualizarFilialRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `razaoSocial` | `string` | Required | - | getRazaoSocial(): string | setRazaoSocial(string razaoSocial): void |
| `cnpj` | `string` | Required | - | getCnpj(): string | setCnpj(string cnpj): void |
| `status` | `int` | Required | - | getStatus(): int | setStatus(int status): void |
| `prioridade` | `int` | Required | - | getPrioridade(): int | setPrioridade(int prioridade): void |
| `logisticas` | `string[]` | Required | - | getLogisticas(): array | setLogisticas(array logisticas): void |

## Example (as JSON)

```json
{
  "razao_social": "teste b4c razao social alteracao",
  "cnpj": "123456789",
  "status": 1,
  "prioridade": 2,
  "logisticas": [
    "701"
  ]
}
```

