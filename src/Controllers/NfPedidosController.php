<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Controllers;

use ApiB4CLib\Exceptions\ApiException;
use ApiB4CLib\Models\ConsultarNFPedido;
use ApiB4CLib\Models\DeletaNFPedido;
use ApiB4CLib\Models\DeletaNFPedidoRequest;
use ApiB4CLib\Models\EnviaNFPedido;
use ApiB4CLib\Models\EnviaNFPedidoRequest;
use Core\Request\Parameters\BodyParam;
use CoreInterfaces\Core\Request\RequestMethod;

class NfPedidosController extends BaseController
{
    /**
     * @param EnviaNFPedidoRequest $body
     *
     * @return EnviaNFPedido Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function enviaNFPedido(EnviaNFPedidoRequest $body): EnviaNFPedido
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/pedidos/notas-fiscais/398341')
            ->parameters(BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(EnviaNFPedido::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param DeletaNFPedidoRequest $body
     *
     * @return DeletaNFPedido Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deletaNFPedido(DeletaNFPedidoRequest $body): DeletaNFPedido
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/pedidos/notas-fiscais/398341')
            ->parameters(BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(DeletaNFPedido::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @return ConsultarNFPedido Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function consultarNFPedido(): ConsultarNFPedido
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/pedidos/notas-fiscais/398341');

        $_resHandler = $this->responseHandler()->type(ConsultarNFPedido::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
