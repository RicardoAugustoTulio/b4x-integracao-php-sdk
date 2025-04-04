
# Estoques Retira

## Structure

`EstoquesRetira`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filialErp` | `string` | Required | - | getFilialErp(): string | setFilialErp(string filialErp): void |
| `quantidade` | `string` | Required | - | getQuantidade(): string | setQuantidade(string quantidade): void |
| `considerarEstoque` | `string` | Required | - | getConsiderarEstoque(): string | setConsiderarEstoque(string considerarEstoque): void |
| `loteId` | `string` | Required | - | getLoteId(): string | setLoteId(string loteId): void |

## Example (as JSON)

```json
{
  "filial_erp": "1",
  "quantidade": "0",
  "considerar_estoque": "1",
  "lote_id": "123"
}
```

