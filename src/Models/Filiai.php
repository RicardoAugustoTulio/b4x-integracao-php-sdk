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

class Filiai implements \JsonSerializable
{
    /**
     * @var string
     */
    private $filial;

    /**
     * @param string $filial
     */
    public function __construct(string $filial)
    {
        $this->filial = $filial;
    }

    /**
     * Returns Filial.
     */
    public function getFilial(): string
    {
        return $this->filial;
    }

    /**
     * Sets Filial.
     *
     * @required
     * @maps filial
     */
    public function setFilial(string $filial): void
    {
        $this->filial = $filial;
    }

    /**
     * Converts the Filiai object to a human-readable string representation.
     *
     * @return string The string representation of the Filiai object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Filiai', ['filial' => $this->filial]);
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
        $json['filial'] = $this->filial;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
