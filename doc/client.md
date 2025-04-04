
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `basicAuthCredentials` | [`BasicAuthCredentials`](auth/basic-authentication.md) | The Credentials Setter for Basic Authentication |

The API client can be initialized as follows:

```php
$client = ApiB4CClientBuilder::init()
    ->basicAuthCredentials(
        BasicAuthCredentialsBuilder::init(
            'username',
            'password'
        )
    )
    ->environment(Environment::PRODUCTION)
    ->build();
```

## Api B4C Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getCategoriasController() | Gets CategoriasController |
| getMarcasController() | Gets MarcasController |
| getProdutosController() | Gets ProdutosController |
| getPedidosController() | Gets PedidosController |
| getEntregasDoPedidoController() | Gets EntregasDoPedidoController |
| getCampanhaController() | Gets CampanhaController |
| getOfertaController() | Gets OfertaController |
| getQuantidadeController() | Gets QuantidadeController |
| getPreOsController() | Gets PreOsController |
| getEventosDaEntregaController() | Gets EventosDaEntregaController |
| getEventosPedidosController() | Gets EventosPedidosController |
| getNfPedidosController() | Gets NfPedidosController |
| getFiliaisController() | Gets FiliaisController |
| getFiliaisFaturamentoController() | Gets FiliaisFaturamentoController |
| getProdutosVinculoFiliaisController() | Gets ProdutosVinculoFiliaisController |
| getUsuariosController() | Gets UsuariosController |
| getEnderecoController() | Gets EnderecoController |
| getDescontosController() | Gets DescontosController |
| getClientesController() | Gets ClientesController |
| getBoletoController() | Gets BoletoController |
| getPixController() | Gets PixController |
| getTicketsController() | Gets TicketsController |
| getObservaEsPedidosController() | Gets ObservaEsPedidosController |
| getPersonalizacaoController() | Gets PersonalizacaoController |

