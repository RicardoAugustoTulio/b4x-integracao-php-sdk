
# Atualizar Campanha Request 2

## Structure

`AtualizarCampanhaRequest2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nomeCampanhaLevemais` | `string` | Required | - | getNomeCampanhaLevemais(): string | setNomeCampanhaLevemais(string nomeCampanhaLevemais): void |
| `inicioCampanhaLevemais` | `string` | Required | - | getInicioCampanhaLevemais(): string | setInicioCampanhaLevemais(string inicioCampanhaLevemais): void |
| `fimCampanhaLevemais` | `string` | Required | - | getFimCampanhaLevemais(): string | setFimCampanhaLevemais(string fimCampanhaLevemais): void |
| `prioridadeCampanhaLevemais` | `int` | Required | - | getPrioridadeCampanhaLevemais(): int | setPrioridadeCampanhaLevemais(int prioridadeCampanhaLevemais): void |
| `comprandoProdutos` | `int` | Required | - | getComprandoProdutos(): int | setComprandoProdutos(int comprandoProdutos): void |
| `numeroProdutosBeneficio` | `int` | Required | - | getNumeroProdutosBeneficio(): int | setNumeroProdutosBeneficio(int numeroProdutosBeneficio): void |
| `percentualDesconto` | `int` | Required | - | getPercentualDesconto(): int | setPercentualDesconto(int percentualDesconto): void |
| `statusCampanhaLevemais` | `int` | Required | - | getStatusCampanhaLevemais(): int | setStatusCampanhaLevemais(int statusCampanhaLevemais): void |

## Example (as JSON)

```json
{
  "nome_campanha_levemais": "Pague 2 leve 3",
  "inicio_campanha_levemais": "2017-10-24 12:34:00",
  "fim_campanha_levemais": "2099-10-25 12:34:00",
  "prioridade_campanha_levemais": 10,
  "comprando_produtos": 2,
  "numero_produtos_beneficio": 1,
  "percentual_desconto": 100,
  "status_campanha_levemais": 1
}
```

