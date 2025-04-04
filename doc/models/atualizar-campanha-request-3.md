
# Atualizar Campanha Request 3

## Structure

`AtualizarCampanhaRequest3`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idCampanhaPromocional` | `int` | Required | - | getIdCampanhaPromocional(): int | setIdCampanhaPromocional(int idCampanhaPromocional): void |
| `nomeCampanhaPromocional` | `string` | Required | - | getNomeCampanhaPromocional(): string | setNomeCampanhaPromocional(string nomeCampanhaPromocional): void |
| `inicioCampanhaPromocional` | `string` | Required | - | getInicioCampanhaPromocional(): string | setInicioCampanhaPromocional(string inicioCampanhaPromocional): void |
| `fimCampanhaPromocional` | `string` | Required | - | getFimCampanhaPromocional(): string | setFimCampanhaPromocional(string fimCampanhaPromocional): void |
| `priorididadeCampanhaPromocional` | `string` | Required | - | getPriorididadeCampanhaPromocional(): string | setPriorididadeCampanhaPromocional(string priorididadeCampanhaPromocional): void |
| `tipoCampanhaPromocional` | `int` | Required | - | getTipoCampanhaPromocional(): int | setTipoCampanhaPromocional(int tipoCampanhaPromocional): void |

## Example (as JSON)

```json
{
  "id_campanha_promocional": 10,
  "nome_campanha_promocional": "Campanha Teste Alteracao CADASTRO PELA API 10",
  "inicio_campanha_promocional": "2017-10-24 12:34:00",
  "fim_campanha_promocional": "2099-10-25 12:34:00",
  "priorididade_campanha_promocional": "800",
  "tipo_campanha_promocional": 3
}
```

