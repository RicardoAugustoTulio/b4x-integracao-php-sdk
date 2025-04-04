
# Estoque

## Structure

`Estoque`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filialErp` | `string` | Required | - | getFilialErp(): string | setFilialErp(string filialErp): void |
| `quantidade` | `string` | Required | - | getQuantidade(): string | setQuantidade(string quantidade): void |
| `estoqueDiasSemVenda` | `string` | Required | - | getEstoqueDiasSemVenda(): string | setEstoqueDiasSemVenda(string estoqueDiasSemVenda): void |
| `estoqueDiasDisponivel` | `string` | Required | - | getEstoqueDiasDisponivel(): string | setEstoqueDiasDisponivel(string estoqueDiasDisponivel): void |
| `estoqueQuantidadeFaseCompra` | `string` | Required | - | getEstoqueQuantidadeFaseCompra(): string | setEstoqueQuantidadeFaseCompra(string estoqueQuantidadeFaseCompra): void |
| `quantidadeVendida` | `string` | Required | - | getQuantidadeVendida(): string | setQuantidadeVendida(string quantidadeVendida): void |
| `considerarEstoque` | `string` | Required | - | getConsiderarEstoque(): string | setConsiderarEstoque(string considerarEstoque): void |
| `crossdocking` | `string` | Required | - | getCrossdocking(): string | setCrossdocking(string crossdocking): void |
| `quantidadeTelevenda` | `string` | Required | - | getQuantidadeTelevenda(): string | setQuantidadeTelevenda(string quantidadeTelevenda): void |
| `depositoExterno` | `int` | Required | - | getDepositoExterno(): int | setDepositoExterno(int depositoExterno): void |
| `estoqueExterno` | `string` | Required | - | getEstoqueExterno(): string | setEstoqueExterno(string estoqueExterno): void |
| `loteId` | `string` | Required | - | getLoteId(): string | setLoteId(string loteId): void |

## Example (as JSON)

```json
{
  "filial_erp": "1",
  "quantidade": "0",
  "estoque_dias_sem_venda": "0",
  "estoque_dias_disponivel": "0",
  "estoque_quantidade_fase_compra": "0",
  "quantidade_vendida": "0",
  "considerar_estoque": "1",
  "crossdocking": "0",
  "quantidade_televenda": "111",
  "deposito_externo": 1,
  "estoque_externo": "100",
  "lote_id": "123"
}
```

