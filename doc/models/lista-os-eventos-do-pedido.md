
# Lista Os Eventos Do Pedido

## Structure

`ListaOsEventosDoPedido`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `eventos` | [`Evento[]`](../../doc/models/evento.md) | Required | - | getEventos(): array | setEventos(array eventos): void |

## Example (as JSON)

```json
{
  "eventos": [
    {
      "data": "2020-09-28 15:47:16",
      "status": "1",
      "descricao": "O pagamento não foi finalizado"
    },
    {
      "data": "2020-09-28 15:47:17",
      "status": "2",
      "descricao": "Aguardando Pagamento"
    },
    {
      "data": "2020-09-29 16:21:35",
      "status": "4",
      "descricao": "Na Expedição"
    }
  ]
}
```

