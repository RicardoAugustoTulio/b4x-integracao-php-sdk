
# Cadastra Campanha Request

## Structure

`CadastraCampanhaRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idCampanhaPromocional` | `string` | Required | - | getIdCampanhaPromocional(): string | setIdCampanhaPromocional(string idCampanhaPromocional): void |
| `nomeCampanhaPromocional` | `string` | Required | - | getNomeCampanhaPromocional(): string | setNomeCampanhaPromocional(string nomeCampanhaPromocional): void |
| `inicioCampanhaPromocional` | `string` | Required | - | getInicioCampanhaPromocional(): string | setInicioCampanhaPromocional(string inicioCampanhaPromocional): void |
| `fimCampanhaPromocional` | `string` | Required | - | getFimCampanhaPromocional(): string | setFimCampanhaPromocional(string fimCampanhaPromocional): void |
| `priorididadeCampanhaPromocional` | `string` | Required | - | getPriorididadeCampanhaPromocional(): string | setPriorididadeCampanhaPromocional(string priorididadeCampanhaPromocional): void |

## Example (as JSON)

```json
{
  "id_campanha_promocional": "2001",
  "nome_campanha_promocional": "Campanha Teste CADASTRO PELA API 2",
  "inicio_campanha_promocional": "2017-10-24 12:34:00",
  "fim_campanha_promocional": "2099-10-25 12:34:00",
  "priorididade_campanha_promocional": "800"
}
```

