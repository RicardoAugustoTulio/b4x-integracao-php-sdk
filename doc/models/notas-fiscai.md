
# Notas Fiscai

## Structure

`NotasFiscai`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | `string` | Required | - | getData(): string | setData(string data): void |
| `tipo` | `string` | Required | - | getTipo(): string | setTipo(string tipo): void |
| `numero` | `string` | Required | - | getNumero(): string | setNumero(string numero): void |
| `chave` | `string` | Required | - | getChave(): string | setChave(string chave): void |
| `xml` | `string` | Required | - | getXml(): string | setXml(string xml): void |
| `codigoFornecedor` | `string` | Required | - | getCodigoFornecedor(): string | setCodigoFornecedor(string codigoFornecedor): void |
| `urlDownload` | `string` | Required | - | getUrlDownload(): string | setUrlDownload(string urlDownload): void |

## Example (as JSON)

```json
{
  "data": "2020-09-29 16:36:57",
  "tipo": "",
  "numero": "1500",
  "chave": "41200900915086000263550040000149881885575321",
  "xml": "",
  "codigo_fornecedor": "0",
  "url_download": ""
}
```

