
# Atualizar Campanha Request

## Structure

`AtualizarCampanhaRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nomeCampanhaPromocional` | `string` | Required | - | getNomeCampanhaPromocional(): string | setNomeCampanhaPromocional(string nomeCampanhaPromocional): void |
| `inicioCampanhaPromocional` | `string` | Required | - | getInicioCampanhaPromocional(): string | setInicioCampanhaPromocional(string inicioCampanhaPromocional): void |
| `fimCampanhaPromocional` | `string` | Required | - | getFimCampanhaPromocional(): string | setFimCampanhaPromocional(string fimCampanhaPromocional): void |
| `priorididadeCampanhaPromocional` | `string` | Required | - | getPriorididadeCampanhaPromocional(): string | setPriorididadeCampanhaPromocional(string priorididadeCampanhaPromocional): void |

## Example (as JSON)

```json
{
  "nome_campanha_promocional": "Campanha Teste CAD API - ALTERACAO",
  "inicio_campanha_promocional": "2020-01-01 12:34:00",
  "fim_campanha_promocional": "2099-10-25 12:34:00",
  "priorididade_campanha_promocional": "-500"
}
```

