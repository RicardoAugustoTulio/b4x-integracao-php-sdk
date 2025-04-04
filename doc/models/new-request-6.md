
# New Request 6

## Structure

`NewRequest6`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `codigo` | `string` | Required | - | getCodigo(): string | setCodigo(string codigo): void |
| `status` | `int` | Required | - | getStatus(): int | setStatus(int status): void |
| `dadosDoCliente` | [`DadosDoCliente`](../../doc/models/dados-do-cliente.md) | Required | - | getDadosDoCliente(): DadosDoCliente | setDadosDoCliente(DadosDoCliente dadosDoCliente): void |

## Example (as JSON)

```json
{
  "codigo": "743864",
  "status": 8,
  "dados_do_cliente": {
    "nome": "Gustavo Cardoso",
    "tipo": 1,
    "cpf_cnpj": "*****************"
  }
}
```

