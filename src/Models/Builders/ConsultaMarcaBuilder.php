<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\Brindes2;
use ApiB4CLib\Models\ConsultaMarca;
use ApiB4CLib\Models\Marca;
use Core\Utils\CoreHelper;

/**
 * Builder for model ConsultaMarca
 *
 * @see ConsultaMarca
 */
class ConsultaMarcaBuilder
{
    /**
     * @var ConsultaMarca
     */
    private $instance;

    private function __construct(ConsultaMarca $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Consulta Marca Builder object.
     *
     * @param Marca[] $marcas
     * @param Brindes2[] $brindes
     */
    public static function init(array $marcas, array $brindes): self
    {
        return new self(new ConsultaMarca($marcas, $brindes));
    }

    /**
     * Initializes a new Consulta Marca object.
     */
    public function build(): ConsultaMarca
    {
        return CoreHelper::clone($this->instance);
    }
}
