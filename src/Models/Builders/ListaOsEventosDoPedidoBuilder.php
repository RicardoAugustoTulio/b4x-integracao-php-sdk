<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\Evento;
use ApiB4CLib\Models\ListaOsEventosDoPedido;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListaOsEventosDoPedido
 *
 * @see ListaOsEventosDoPedido
 */
class ListaOsEventosDoPedidoBuilder
{
    /**
     * @var ListaOsEventosDoPedido
     */
    private $instance;

    private function __construct(ListaOsEventosDoPedido $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Lista Os Eventos Do Pedido Builder object.
     *
     * @param Evento[] $eventos
     */
    public static function init(array $eventos): self
    {
        return new self(new ListaOsEventosDoPedido($eventos));
    }

    /**
     * Initializes a new Lista Os Eventos Do Pedido object.
     */
    public function build(): ListaOsEventosDoPedido
    {
        return CoreHelper::clone($this->instance);
    }
}
