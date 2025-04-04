
# Atualizar Filial Request

## Structure

`AtualizarFilialRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nome` | `string` | Required | - | getNome(): string | setNome(string nome): void |
| `razaoSocial` | `string` | Required | - | getRazaoSocial(): string | setRazaoSocial(string razaoSocial): void |
| `cnpj` | `string` | Required | - | getCnpj(): string | setCnpj(string cnpj): void |
| `ie` | `string` | Required | - | getIe(): string | setIe(string ie): void |
| `cep` | `string` | Required | - | getCep(): string | setCep(string cep): void |
| `endereco` | `string` | Required | - | getEndereco(): string | setEndereco(string endereco): void |
| `numero` | `string` | Required | - | getNumero(): string | setNumero(string numero): void |
| `complemento` | `string` | Required | - | getComplemento(): string | setComplemento(string complemento): void |
| `bairro` | `string` | Required | - | getBairro(): string | setBairro(string bairro): void |
| `cidade` | `string` | Required | - | getCidade(): string | setCidade(string cidade): void |
| `uf` | `string` | Required | - | getUf(): string | setUf(string uf): void |
| `emailContato` | `string` | Required | - | getEmailContato(): string | setEmailContato(string emailContato): void |
| `emailVendas` | `string` | Required | - | getEmailVendas(): string | setEmailVendas(string emailVendas): void |
| `fone` | `string` | Required | - | getFone(): string | setFone(string fone): void |
| `fone2` | `string` | Required | - | getFone2(): string | setFone2(string fone2): void |
| `urlGoogleMaps` | `string` | Required | - | getUrlGoogleMaps(): string | setUrlGoogleMaps(string urlGoogleMaps): void |
| `urlVideoYoutube` | `string` | Required | - | getUrlVideoYoutube(): string | setUrlVideoYoutube(string urlVideoYoutube): void |
| `possuiEstacionamento` | `string` | Required | - | getPossuiEstacionamento(): string | setPossuiEstacionamento(string possuiEstacionamento): void |
| `horarioAtendimento` | `string` | Required | - | getHorarioAtendimento(): string | setHorarioAtendimento(string horarioAtendimento): void |
| `slogan` | `string` | Required | - | getSlogan(): string | setSlogan(string slogan): void |
| `status` | `int` | Required | - | getStatus(): int | setStatus(int status): void |

## Example (as JSON)

```json
{
  "nome": "teste b4c nome alteracao",
  "razao_social": "teste b4c razao social alteracao 2",
  "cnpj": "123456789",
  "ie": "321654",
  "cep": "82320270",
  "endereco": "luiz pelegrino toaldo",
  "numero": "96",
  "complemento": "casa",
  "bairro": "santa felicidade",
  "cidade": "curitiba",
  "uf": "PR",
  "email_contato": "contato@b4commerce.com.br",
  "email_vendas": "vendas@b4commerce.com.br",
  "fone": "4132733134",
  "fone2": "41996381828",
  "url_google_maps": "google maps",
  "url_video_youtube": "video youtube",
  "possui_estacionamento": "sim",
  "horario_atendimento": "1 a 2",
  "slogan": "nao tem",
  "status": 1
}
```

