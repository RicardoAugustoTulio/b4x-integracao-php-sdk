<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Controllers;

use ApiB4CLib\Exceptions\ApiException;
use ApiB4CLib\Models\NewRequest7;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;

class BoletoController extends BaseController
{
    /**
     * Permite listar os dados do boleto com base codigo do pedido
     *
     * **`#GET /tickets/boleto/{codigo}`**
     *
     * | Nome | Descrição | Inf Adicional |
     * | --- | --- | --- |
     * | codigo | codigo do pedido na plataforma. | campo obrigatório. |
     *
     * @param string $codigo
     *
     * @return NewRequest7[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function boleto(string $codigo): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/tickets/boleto/{codigo}')
            ->auth('basic')
            ->parameters(TemplateParam::init('codigo', $codigo));

        $_resHandler = $this->responseHandler()->type(NewRequest7::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Permite listar os dados do boleto com base cpf do cliente
     *
     * **`#GET /tickets/boleto/{cpf}`**
     *
     * | Nome | Descrição | Inf Adicional |
     * | --- | --- | --- |
     * | cpf | cpf do cliente na plataforma. | campo obrigatório. |
     *
     * @param string $cpf
     *
     * @return NewRequest7[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function boletoCpf(string $cpf): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/tickets/boletoCpf/{cpf}')
            ->auth('basic')
            ->parameters(TemplateParam::init('cpf', $cpf));

        $_resHandler = $this->responseHandler()->type(NewRequest7::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
