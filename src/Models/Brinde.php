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

class Brinde implements \JsonSerializable
{
    /**
     * @var string
     */
    private $sku;

    /**
     * @param string $sku
     */
    public function __construct(string $sku)
    {
        $this->sku = $sku;
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
     * Converts the Brinde object to a human-readable string representation.
     *
     * @return string The string representation of the Brinde object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Brinde', ['sku' => $this->sku]);
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
        $json['sku'] = $this->sku;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
