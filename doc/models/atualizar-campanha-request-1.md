
# Atualizar Campanha Request 1

## Structure

`AtualizarCampanhaRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nomeCampanhaBrindes` | `string` | Required | - | getNomeCampanhaBrindes(): string | setNomeCampanhaBrindes(string nomeCampanhaBrindes): void |
| `inicioCampanhaBrindes` | `string` | Required | - | getInicioCampanhaBrindes(): string | setInicioCampanhaBrindes(string inicioCampanhaBrindes): void |
| `fimCampanhaBrindes` | `string` | Required | - | getFimCampanhaBrindes(): string | setFimCampanhaBrindes(string fimCampanhaBrindes): void |
| `priorididadeCampanhaBrindes` | `string` | Required | - | getPriorididadeCampanhaBrindes(): string | setPriorididadeCampanhaBrindes(string priorididadeCampanhaBrindes): void |
| `statusCampanhaBrindes` | `int` | Required | - | getStatusCampanhaBrindes(): int | setStatusCampanhaBrindes(int statusCampanhaBrindes): void |

## Example (as JSON)

```json
{
  "nome_campanha_brindes": "Campanha Teste CADASTRO PELA API EDITADO",
  "inicio_campanha_brindes": "2017-10-24 12:34:00",
  "fim_campanha_brindes": "2099-10-25 12:34:00",
  "priorididade_campanha_brindes": "10",
  "status_campanha_brindes": 1
}
```

