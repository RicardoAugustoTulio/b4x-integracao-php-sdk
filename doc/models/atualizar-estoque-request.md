
# Atualizar Estoque Request

## Structure

`AtualizarEstoqueRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `estoques` | [`Estoque[]`](../../doc/models/estoque.md) | Required | - | getEstoques(): array | setEstoques(array estoques): void |
| `estoquesRetira` | [`EstoquesRetira2[]`](../../doc/models/estoques-retira-2.md) | Required | - | getEstoquesRetira(): array | setEstoquesRetira(array estoquesRetira): void |

## Example (as JSON)

```json
{
  "estoques": [
    {
      "filial_erp": "1",
      "quantidade": "1",
      "estoque_dias_sem_venda": "0",
      "estoque_dias_disponivel": "0",
      "estoque_quantidade_fase_compra": "0",
      "quantidade_vendida": "10",
      "considerar_estoque": "1",
      "crossdocking": "0",
      "quantidade_televenda": "111",
      "deposito_externo": 1,
      "estoque_externo": "100",
      "lote_id": "123"
    },
    {
      "filial_erp": "2",
      "quantidade": "11",
      "estoque_dias_sem_venda": "0",
      "estoque_dias_disponivel": "0",
      "estoque_quantidade_fase_compra": "0",
      "quantidade_vendida": "10",
      "considerar_estoque": "1",
      "crossdocking": "0",
      "quantidade_televenda": "111",
      "deposito_externo": 1,
      "estoque_externo": "100",
      "lote_id": "123"
    }
  ],
  "estoques_retira": [
    {
      "filial_erp": "1",
      "quantidade": "1",
      "considerar_estoque": "1"
    },
    {
      "filial_erp": "2",
      "quantidade": "1",
      "considerar_estoque": "1"
    }
  ]
}
```

