
# Atualiza Entrega Request

## Structure

`AtualizaEntregaRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `rastreio` | `string` | Required | - | getRastreio(): string | setRastreio(string rastreio): void |
| `dataEnvio` | `string` | Required | - | getDataEnvio(): string | setDataEnvio(string dataEnvio): void |
| `dataEntrega` | `string` | Required | - | getDataEntrega(): string | setDataEntrega(string dataEntrega): void |
| `data` | `string` | Required | - | getData(): string | setData(string data): void |
| `operacao` | `string` | Required | - | getOperacao(): string | setOperacao(string operacao): void |
| `numero` | `string` | Required | - | getNumero(): string | setNumero(string numero): void |
| `nf` | `string` | Required | - | getNf(): string | setNf(string nf): void |
| `urlDownload` | `string` | Required | - | getUrlDownload(): string | setUrlDownload(string urlDownload): void |

## Example (as JSON)

```json
{
  "rastreio": "AA123456789BR",
  "data_envio": "2020-01-01 10:27:030",
  "data_entrega": "2020-01-01 10:27:030",
  "data": "2020-01-01 10:27:030",
  "operacao": "002",
  "numero": "15659",
  "nf": "NFe41200300915086000263550020003034231367245476",
  "url_download": "https://downloadnota.com.br/id=123"
}
```

