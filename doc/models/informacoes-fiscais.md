
# Informacoes Fiscais

## Structure

`InformacoesFiscais`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ipi` | `?string` | Required | - | getIpi(): ?string | setIpi(?string ipi): void |
| `cfop` | `string` | Required | - | getCfop(): string | setCfop(string cfop): void |
| `ncm` | `string` | Required | - | getNcm(): string | setNcm(string ncm): void |
| `cest` | `string` | Required | - | getCest(): string | setCest(string cest): void |
| `cst` | `string` | Required | - | getCst(): string | setCst(string cst): void |
| `icms` | `string` | Required | - | getIcms(): string | setIcms(string icms): void |
| `reducaoIcms` | `?string` | Required | - | getReducaoIcms(): ?string | setReducaoIcms(?string reducaoIcms): void |
| `icmsSt` | `string` | Required | - | getIcmsSt(): string | setIcmsSt(string icmsSt): void |
| `diferimentoParcial` | `string` | Required | - | getDiferimentoParcial(): string | setDiferimentoParcial(string diferimentoParcial): void |
| `mva` | `string` | Required | - | getMva(): string | setMva(string mva): void |
| `origem` | `string` | Required | - | getOrigem(): string | setOrigem(string origem): void |
| `tipoOrigem` | `string` | Required | - | getTipoOrigem(): string | setTipoOrigem(string tipoOrigem): void |
| `csosn` | `string` | Required | - | getCsosn(): string | setCsosn(string csosn): void |

## Example (as JSON)

```json
{
  "ipi": "ipi0",
  "cfop": "",
  "ncm": "",
  "cest": "0",
  "cst": "",
  "icms": "0.00",
  "reducao_icms": "reducao_icms4",
  "icms_st": "0.00",
  "diferimento_parcial": "0.00",
  "mva": "0.00",
  "origem": "0",
  "tipo_origem": "",
  "csosn": "400"
}
```

