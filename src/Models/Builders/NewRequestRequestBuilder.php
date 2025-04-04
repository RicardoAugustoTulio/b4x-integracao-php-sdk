<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\NewRequestRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model NewRequestRequest
 *
 * @see NewRequestRequest
 */
class NewRequestRequestBuilder
{
    /**
     * @var NewRequestRequest
     */
    private $instance;

    private function __construct(NewRequestRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new New Request Request Builder object.
     *
     * @param string $codigo
     */
    public static function init(string $codigo): self
    {
        return new self(new NewRequestRequest($codigo));
    }

    /**
     * Initializes a new New Request Request object.
     */
    public function build(): NewRequestRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
