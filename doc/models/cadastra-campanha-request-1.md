
# Cadastra Campanha Request 1

## Structure

`CadastraCampanhaRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idCampanhaBrindes` | `string` | Required | - | getIdCampanhaBrindes(): string | setIdCampanhaBrindes(string idCampanhaBrindes): void |
| `nomeCampanhaBrindes` | `string` | Required | - | getNomeCampanhaBrindes(): string | setNomeCampanhaBrindes(string nomeCampanhaBrindes): void |
| `inicioCampanhaBrindes` | `string` | Required | - | getInicioCampanhaBrindes(): string | setInicioCampanhaBrindes(string inicioCampanhaBrindes): void |
| `fimCampanhaBrindes` | `string` | Required | - | getFimCampanhaBrindes(): string | setFimCampanhaBrindes(string fimCampanhaBrindes): void |

## Example (as JSON)

```json
{
  "id_campanha_brindes": "20",
  "nome_campanha_brindes": "Campanha Teste CADASTRO PELA API",
  "inicio_campanha_brindes": "2017-10-24 12:34:00",
  "fim_campanha_brindes": "2099-10-25 12:34:00"
}
```

