<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\EnviaNFPedidoRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model EnviaNFPedidoRequest
 *
 * @see EnviaNFPedidoRequest
 */
class EnviaNFPedidoRequestBuilder
{
    /**
     * @var EnviaNFPedidoRequest
     */
    private $instance;

    private function __construct(EnviaNFPedidoRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Envia NF Pedido Request Builder object.
     *
     * @param string $operacao
     * @param string $numero
     * @param string $nf
     * @param string $xml
     */
    public static function init(string $operacao, string $numero, string $nf, string $xml): self
    {
        return new self(new EnviaNFPedidoRequest($operacao, $numero, $nf, $xml));
    }

    /**
     * Initializes a new Envia NF Pedido Request object.
     */
    public function build(): EnviaNFPedidoRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
