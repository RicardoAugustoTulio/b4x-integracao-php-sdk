<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Controllers;

use ApiB4CLib\Exceptions\ApiException;
use ApiB4CLib\Models\NewRequest9;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;

class PixController extends BaseController
{
    /**
     * Permite listar os dados de pix com base codigo do pedido
     *
     * **`#GET /tickets/pix/{codigo}`**
     *
     * | Nome | Descrição | Inf Adicional |
     * | --- | --- | --- |
     * | codigo | codigo do pedido na plataforma | campo obrigatório. |
     *
     * @param string $codigo
     *
     * @return NewRequest9[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function pix(string $codigo): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/tickets/pix/{codigo}')
            ->auth('basic')
            ->parameters(TemplateParam::init('codigo', $codigo));

        $_resHandler = $this->responseHandler()->type(NewRequest9::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Permite listar os dados de pix com base no cpf do cliente
     *
     * **`#GET /tickets/pixCpf/{cpf}`**
     *
     * | Nome | Descrição | Inf Adicional |
     * | --- | --- | --- |
     * | cpf | cpf do cliente na plataforma | campo obrigatório. |
     *
     * @param string $cpf
     *
     * @return NewRequest9[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function pixCpf(string $cpf): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/tickets/pixCpf/{cpf}')
            ->auth('basic')
            ->parameters(TemplateParam::init('cpf', $cpf));

        $_resHandler = $this->responseHandler()->type(NewRequest9::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
