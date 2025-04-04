
# Consulta Quantidade

## Structure

`ConsultaQuantidade`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campanha` | [`Campanha`](../../doc/models/campanha.md) | Required | - | getCampanha(): Campanha | setCampanha(Campanha campanha): void |
| `brindes` | [`Brindes2[]`](../../doc/models/brindes-2.md) | Required | - | getBrindes(): array | setBrindes(array brindes): void |

## Example (as JSON)

```json
{
  "campanha": {
    "id_oferta": "7",
    "campanha_brindes": "8",
    "valor_total_carrinho": "200.00",
    "quantidade_total_carrinho": "5"
  },
  "brindes": [
    {
      "campanha": "7",
      "sku": "105294",
      "nome": "Kit de Ponta Bits Sextavadas 1/4\" 061796 Robust 8 Peças"
    },
    {
      "campanha": "7",
      "sku": "123136",
      "nome": "Macaco Hidráulico Jacaré 2Ton J2301 Bovenau - Com Maleta"
    },
    {
      "campanha": "7",
      "sku": "OLD_1036",
      "nome": "Soprador Térmico 1300W 300/500°C HL1500 Steinel Comala - 127 Volts"
    },
    {
      "campanha": "7",
      "sku": "OLD_1057",
      "nome": "MARTELO BOLA 500 GR FAMASTIL"
    },
    {
      "campanha": "7",
      "sku": "158703",
      "nome": "prumo de parede de metal 500 gramas vonder 3321158500"
    },
    {
      "campanha": "7",
      "sku": "OLD_1178",
      "nome": "Lixa Folha D'Água Para Polimento Grão 1500 3M"
    }
  ]
}
```

