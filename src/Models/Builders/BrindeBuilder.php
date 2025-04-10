<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\Brinde;
use Core\Utils\CoreHelper;

/**
 * Builder for model Brinde
 *
 * @see Brinde
 */
class BrindeBuilder
{
    /**
     * @var Brinde
     */
    private $instance;

    private function __construct(Brinde $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Brinde Builder object.
     *
     * @param string $sku
     */
    public static function init(string $sku): self
    {
        return new self(new Brinde($sku));
    }

    /**
     * Initializes a new Brinde object.
     */
    public function build(): Brinde
    {
        return CoreHelper::clone($this->instance);
    }
}
