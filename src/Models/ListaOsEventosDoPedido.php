<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models;

use ApiB4CLib\ApiHelper;
use stdClass;

class ListaOsEventosDoPedido implements \JsonSerializable
{
    /**
     * @var Evento[]
     */
    private $eventos;

    /**
     * @param Evento[] $eventos
     */
    public function __construct(array $eventos)
    {
        $this->eventos = $eventos;
    }

    /**
     * Returns Eventos.
     *
     * @return Evento[]
     */
    public function getEventos(): array
    {
        return $this->eventos;
    }

    /**
     * Sets Eventos.
     *
     * @required
     * @maps eventos
     *
     * @param Evento[] $eventos
     */
    public function setEventos(array $eventos): void
    {
        $this->eventos = $eventos;
    }

    /**
     * Converts the ListaOsEventosDoPedido object to a human-readable string representation.
     *
     * @return string The string representation of the ListaOsEventosDoPedido object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('ListaOsEventosDoPedido', ['eventos' => $this->eventos]);
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['eventos'] = $this->eventos;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
