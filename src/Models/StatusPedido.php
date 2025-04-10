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

class StatusPedido implements \JsonSerializable
{
    /**
     * @var string
     */
    private $codigo;

    /**
     * @var string
     */
    private $status;

    /**
     * @param string $codigo
     * @param string $status
     */
    public function __construct(string $codigo, string $status)
    {
        $this->codigo = $codigo;
        $this->status = $status;
    }

    /**
     * Returns Codigo.
     */
    public function getCodigo(): string
    {
        return $this->codigo;
    }

    /**
     * Sets Codigo.
     *
     * @required
     * @maps codigo
     */
    public function setCodigo(string $codigo): void
    {
        $this->codigo = $codigo;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Converts the StatusPedido object to a human-readable string representation.
     *
     * @return string The string representation of the StatusPedido object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('StatusPedido', ['codigo' => $this->codigo, 'status' => $this->status]);
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
        $json['codigo'] = $this->codigo;
        $json['status'] = $this->status;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
