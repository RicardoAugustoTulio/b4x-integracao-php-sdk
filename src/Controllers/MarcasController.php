<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Controllers;

use ApiB4CLib\Exceptions\ApiException;
use ApiB4CLib\Models\AtualizarMarcaRequest;
use ApiB4CLib\Models\CadastraMarcaRequest;
use ApiB4CLib\Models\CadastrarMarcaRequest;
use ApiB4CLib\Models\ConsultaMarca;
use ApiB4CLib\Models\DeletarMarcaRequest;
use ApiB4CLib\Models\NewRequest;
use ApiB4CLib\Server;
use Core\Request\Parameters\BodyParam;
use CoreInterfaces\Core\Request\RequestMethod;

class MarcasController extends BaseController
{
    /**
     * \*\`#POST /marca
     *
     * **Requisição**
     *
     * \*Body
     *
     * | nome | descricao | tipo | obrigatorio |
     * | --- | --- | --- | --- |
     * | codigo | codigo da marca | string | sim |
     * | descricao | nome da marca | string | sim |
     *
     * **\*Exemplo
     *
     * ``` json
     * {
     * "codigo":"01",
     * "descricao":"Marca  Teste",
     * }
     *
     * ```
     *
     * **Resposta
     *
     * | HTTP Status Code | Descricao | Resposta | json |
     * | --- | --- | --- | --- |
     * | 201 | id da marca gerada | mensagem | {"marca cadastrada com sucesso"} |
     * | 4xx | Requisição inválida | mensagem | {"a marca já está cadastrada"} |
     * | 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.
     * com.br](https://mailto:suporte@b4commerce.com.br)"} |
     *
     * ``` json
     * {
     * "id":1,
     * "mensagem":"Marca cadastrada com sucesso"
     * }
     *
     * ```
     *
     * @param CadastrarMarcaRequest $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cadastrarMarca(CadastrarMarcaRequest $body): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/marca')->parameters(BodyParam::init($body));

        $this->execute($_reqBuilder);
    }

    /**
     * `_#PUT /marca/{id}_`
     *
     * \*Requisição
     *
     * Parâmetros da Url
     *
     * | Nome | Descrição | Tipo | Obrigatório |
     * | --- | --- | --- | --- |
     * | codigo | codigo da Marca | int | Sim |
     *
     * _Body_
     *
     * | nome | descricao | tipo |
     * | --- | --- | --- |
     * | descricao | nome da marca | string |
     * | status | status da marca | bit |
     *
     * _Exemplo_
     *
     * ``` json
     * {
     * "descricao:"Marca Teste",
     * "status": 1
     * }
     *
     * ```
     *
     * _Resposta_
     *
     * | HTTP Status Code | Descricao | Resposta | json |
     * | --- | --- | --- | --- |
     * | 200 | marca alterada com Sucesso | mensagem | {"marca atualizada com sucesso"} |
     * | 4xx | Requisição inválida | mensagem | {"marca nao encontrada"} |
     * | 500 | Erro desconhecido. | mensagem | {"erro deconhecido contate o suporte: [suporte@b4commerce.
     * com.br](https://mailto:suporte@b4commerce.com.br) "} |
     *
     * ``` json
     * {
     * "mensagem": "marca alterada com sucesso"
     * }
     *
     * ```
     *
     * @param AtualizarMarcaRequest $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function atualizarMarca(AtualizarMarcaRequest $body): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/marca/151515')->parameters(BodyParam::init($body));

        $this->execute($_reqBuilder);
    }

    /**
     * ### Remover Marcas
     * >Não é possível excluir subcategorias vinculadas a produtos
     * *`#DELETE/marca/{id}`*
     *
     * **Requisição
     * **Parâmetros da Url
     *
     * | Nome | Descrição | Tipo  | Obrigatório|
     * |------------|---------|---------------|-----------------|
     * | codigo | codigo da marca | int | Sim |
     *
     *
     * *Body
     * N/A
     *
     * *Resposta*
     *
     * | HTTP Status Code | Descricao | Resposta | json |
     * |------|-----------|----------|------------- |
     * | 200 | marca removida com Sucesso | mensagem | {"marca removida com sucesso"}|
     * | 4xx | Requisição inválida | mensagem | {"marca nao encontrada"}|
     * | 500 | Erro desconhecido.  | mensagem | {"erro deconhecido contate o suporte: suporte@b4commerce.
     * com.br "} |
     *
     *
     * ```json
     *
     * {
     *
     * "mensagem": "Marca removida com sucesso"
     * }
     * ````
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function excluirMarca(): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/1')->server(Server::SERVER_2);

        $this->execute($_reqBuilder);
    }

    /**
     * ###Listar Marcass
     *
     * *`GET /marca/?={Offest}&Limit={Limit}`*
     *
     * **Retorna todas as categorias do fornecedor
     * **Requisição
     * **Parâmetros da Url
     *
     * | Nome | Descrição | Tipo  | Inf Adicional |
     * |------------|---------|----------------|----------------|
     * | Offset | Ignora os primeiros { Offset } itens | Integer | |
     * | Limit | Define a quantidade de registros | Integer | 200 registros |
     *
     * **Requisição
     * **Parâmetros da Url
     * *`#GET /marca/{codigo}`*
     * **Retorna informações sobre uma marca cadastrada
     *
     * | Nome | Descrição | Tipo  | Obrigatório|
     * |------------|---------|------------------|--------------|
     * | codigo | código da marca | string | Sim |
     *
     * *Resposta*
     *
     * | nome | descricao | tipo |
     * |------|-----------|------|
     * | codigo | codigo da marca | string |
     * | descricao | nome da marca | string |
     * | status | status da marca | bit |
     *
     *
     * *Output*
     *
     * ```json
     * {
     * "marcas": [{
     * "codigo":"1",
     * "descricao":"Marca Teste",
     * "status": 1
     * }]
     * }
     * ```
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listarMarcas(): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/marca/1');

        $this->execute($_reqBuilder);
    }

    /**
     * @return ConsultaMarca Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function consultaMarca(): ConsultaMarca
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/brindes/marcas/9');

        $_resHandler = $this->responseHandler()->type(ConsultaMarca::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * # Cadastro de marcas e seus brindes - será vinculado as ofertas
     *
     * ** /brindes/marcas/{codigo_da_oferta}**
     *
     * | **nome** | **descrição** | **tipo** | **obrigatório** |
     * | --- | --- | --- | --- |
     * | tipo | tipo de regra a ser considerada no brinde | int | sim |
     * | valorTotal | valor total do carrinho caso o tipo seja igual a 1 | string | obrigatório caso o tipo
     * seja igual a 1 |
     * | marcas | array das marcas a serem adicionadas | array | sim |
     * | marcas.id | código da marca | string | sim |
     * | marcas.quantidade | quantidade para regra da marca, caso o tipo seja 1 a quantidade é
     * desconsiderada | string | sim |
     * | brindes | array com os produtos a serem adicionados de brinde | array | nao |
     * | brindes.sku | código do produto | string | sim |
     *
     * @param CadastraMarcaRequest $body
     *
     * @return NewRequest Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cadastraMarca(CadastraMarcaRequest $body): NewRequest
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/brindes/marcas/9')
            ->parameters(BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(NewRequest::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * # Deletar marcas e seus brindes
     *
     * ** /brindes/marcas/{codigo_da_oferta}**
     *
     * | **nome** | **descrição** | **tipo** | **obrigatório** |
     * | --- | --- | --- | --- |
     * | marcas | array de marcas a ser deletado | array | nao |
     * | marcas.id | código da marca | string | sim |
     * | brindes | array de brindes a ser deletado | array | nao |
     * | brindes.sku | código do produto | string | sim |
     *
     * @param DeletarMarcaRequest $body
     *
     * @return NewRequest Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deletarMarca(DeletarMarcaRequest $body): NewRequest
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/brindes/marcas/9')
            ->parameters(BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(NewRequest::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
