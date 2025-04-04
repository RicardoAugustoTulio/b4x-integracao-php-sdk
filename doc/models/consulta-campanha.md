
# Consulta Campanha

## Structure

`ConsultaCampanha`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idCampanhaPromocional` | `string` | Required | - | getIdCampanhaPromocional(): string | setIdCampanhaPromocional(string idCampanhaPromocional): void |
| `statusCampanhaPromocional` | `string` | Required | - | getStatusCampanhaPromocional(): string | setStatusCampanhaPromocional(string statusCampanhaPromocional): void |
| `nomeCampanhaPromocional` | `string` | Required | - | getNomeCampanhaPromocional(): string | setNomeCampanhaPromocional(string nomeCampanhaPromocional): void |
| `tipoCampanhaPromocional` | `?string` | Required | - | getTipoCampanhaPromocional(): ?string | setTipoCampanhaPromocional(?string tipoCampanhaPromocional): void |
| `inicioCampanhaPromocional` | `string` | Required | - | getInicioCampanhaPromocional(): string | setInicioCampanhaPromocional(string inicioCampanhaPromocional): void |
| `fimCampanhaPromocional` | `string` | Required | - | getFimCampanhaPromocional(): string | setFimCampanhaPromocional(string fimCampanhaPromocional): void |
| `logoCampanhaPromocional` | `?string` | Required | - | getLogoCampanhaPromocional(): ?string | setLogoCampanhaPromocional(?string logoCampanhaPromocional): void |
| `bannerCampanhaPromocional` | `?string` | Required | - | getBannerCampanhaPromocional(): ?string | setBannerCampanhaPromocional(?string bannerCampanhaPromocional): void |
| `obsCampanhaPromocional` | `?string` | Required | - | getObsCampanhaPromocional(): ?string | setObsCampanhaPromocional(?string obsCampanhaPromocional): void |
| `identificadorCampanhaPromocional` | `?string` | Required | - | getIdentificadorCampanhaPromocional(): ?string | setIdentificadorCampanhaPromocional(?string identificadorCampanhaPromocional): void |
| `priorididadeCampanhaPromocional` | `string` | Required | - | getPriorididadeCampanhaPromocional(): string | setPriorididadeCampanhaPromocional(string priorididadeCampanhaPromocional): void |
| `campanhaVitrine` | `?string` | Required | - | getCampanhaVitrine(): ?string | setCampanhaVitrine(?string campanhaVitrine): void |
| `campanhaPlace` | `?string` | Required | - | getCampanhaPlace(): ?string | setCampanhaPlace(?string campanhaPlace): void |
| `campanhaUtms` | `?string` | Required | - | getCampanhaUtms(): ?string | setCampanhaUtms(?string campanhaUtms): void |
| `seoCampanha` | `?string` | Required | - | getSeoCampanha(): ?string | setSeoCampanha(?string seoCampanha): void |
| `bloquearPlaceCampanha` | `?string` | Required | - | getBloquearPlaceCampanha(): ?string | setBloquearPlaceCampanha(?string bloquearPlaceCampanha): void |
| `bloquearBuscaCampanha` | `?string` | Required | - | getBloquearBuscaCampanha(): ?string | setBloquearBuscaCampanha(?string bloquearBuscaCampanha): void |
| `bloquearErpCampanha` | `?string` | Required | - | getBloquearErpCampanha(): ?string | setBloquearErpCampanha(?string bloquearErpCampanha): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `updatedAt` | `string` | Required | - | getUpdatedAt(): string | setUpdatedAt(string updatedAt): void |
| `gerarLink` | `string` | Required | - | getGerarLink(): string | setGerarLink(string gerarLink): void |
| `regraAtivacao` | `string` | Required | - | getRegraAtivacao(): string | setRegraAtivacao(string regraAtivacao): void |
| `diasSemana` | `string` | Required | - | getDiasSemana(): string | setDiasSemana(string diasSemana): void |
| `inicioPeriodo` | `string` | Required | - | getInicioPeriodo(): string | setInicioPeriodo(string inicioPeriodo): void |
| `fimPeriodo` | `string` | Required | - | getFimPeriodo(): string | setFimPeriodo(string fimPeriodo): void |
| `temporizador` | `string` | Required | - | getTemporizador(): string | setTemporizador(string temporizador): void |
| `title` | `?string` | Required | - | getTitle(): ?string | setTitle(?string title): void |
| `metaDescription` | `?string` | Required | - | getMetaDescription(): ?string | setMetaDescription(?string metaDescription): void |
| `padraoEtiquetas` | `string` | Required | - | getPadraoEtiquetas(): string | setPadraoEtiquetas(string padraoEtiquetas): void |
| `urlFixa` | `string` | Required | - | getUrlFixa(): string | setUrlFixa(string urlFixa): void |

## Example (as JSON)

```json
{
  "id_campanha_promocional": "2000",
  "status_campanha_promocional": "0",
  "nome_campanha_promocional": "Campanha Teste CAD API - ALTERACAO",
  "tipo_campanha_promocional": "tipo_campanha_promocional6",
  "inicio_campanha_promocional": "2020-01-01 12:34:00",
  "fim_campanha_promocional": "2099-10-25 12:34:00",
  "logo_campanha_promocional": "logo_campanha_promocional0",
  "banner_campanha_promocional": "banner_campanha_promocional6",
  "obs_campanha_promocional": "obs_campanha_promocional8",
  "identificador_campanha_promocional": "identificador_campanha_promocional0",
  "priorididade_campanha_promocional": "-500",
  "campanha_vitrine": "campanha_vitrine6",
  "campanha_place": "campanha_place8",
  "campanha_utms": "campanha_utms6",
  "seo_campanha": "seo_campanha0",
  "bloquear_place_campanha": "bloquear_place_campanha6",
  "bloquear_busca_campanha": "bloquear_busca_campanha2",
  "bloquear_erp_campanha": "bloquear_erp_campanha0",
  "created_at": "2020-09-02 13:57:12",
  "updated_at": "2020-09-02 16:25:06",
  "gerar_link": "0",
  "regra_ativacao": "0",
  "dias_semana": "",
  "inicio_periodo": "00:00:00",
  "fim_periodo": "00:00:00",
  "temporizador": "0",
  "title": "title6",
  "meta_description": "meta_description8",
  "padrao_etiquetas": "0",
  "url_fixa": ""
}
```

