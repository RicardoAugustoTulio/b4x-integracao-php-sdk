<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\Filiai;
use Core\Utils\CoreHelper;

/**
 * Builder for model Filiai
 *
 * @see Filiai
 */
class FiliaiBuilder
{
    /**
     * @var Filiai
     */
    private $instance;

    private function __construct(Filiai $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Filiai Builder object.
     *
     * @param string $filial
     */
    public static function init(string $filial): self
    {
        return new self(new Filiai($filial));
    }

    /**
     * Initializes a new Filiai object.
     */
    public function build(): Filiai
    {
        return CoreHelper::clone($this->instance);
    }
}
