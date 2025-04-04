<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Controllers;

use ApiB4CLib\Exceptions\ApiException;
use ApiB4CLib\Models\ProdutosFiliaisRequest;
use ApiB4CLib\Models\ProdutosFiliaisRequest1;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;

class ProdutosVinculoFiliaisController extends BaseController
{
    /**
     * @param ProdutosFiliaisRequest[] $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function produtosFiliais(array $body): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/produtos/filiais')
            ->parameters(BodyParam::init($body));

        $this->execute($_reqBuilder);
    }

    /**
     * @param string $sKU
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function produtosFiliais1(string $sKU): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/produtos/filiais/{SKU}')
            ->parameters(TemplateParam::init('SKU', $sKU));

        $this->execute($_reqBuilder);
    }

    /**
     * @param ProdutosFiliaisRequest1[] $body
     * @param string $sKU
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function produtosFiliais2(array $body, string $sKU): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/produtos/filiais/{SKU}')
            ->parameters(BodyParam::init($body), TemplateParam::init('SKU', $sKU));

        $this->execute($_reqBuilder);
    }
}
