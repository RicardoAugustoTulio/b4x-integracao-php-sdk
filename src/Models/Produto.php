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

class Produto implements \JsonSerializable
{
    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $quantidade;

    /**
     * @param string $sku
     * @param string $quantidade
     */
    public function __construct(string $sku, string $quantidade)
    {
        $this->sku = $sku;
        $this->quantidade = $quantidade;
    }

    /**
     * Returns Sku.
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * Sets Sku.
     *
     * @required
     * @maps sku
     */
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * Returns Quantidade.
     */
    public function getQuantidade(): string
    {
        return $this->quantidade;
    }

    /**
     * Sets Quantidade.
     *
     * @required
     * @maps quantidade
     */
    public function setQuantidade(string $quantidade): void
    {
        $this->quantidade = $quantidade;
    }

    /**
     * Converts the Produto object to a human-readable string representation.
     *
     * @return string The string representation of the Produto object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Produto', ['sku' => $this->sku, 'quantidade' => $this->quantidade]);
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
        $json['sku']        = $this->sku;
        $json['quantidade'] = $this->quantidade;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
