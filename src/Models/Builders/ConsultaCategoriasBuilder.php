<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\Brindes2;
use ApiB4CLib\Models\Categoria;
use ApiB4CLib\Models\ConsultaCategorias;
use Core\Utils\CoreHelper;

/**
 * Builder for model ConsultaCategorias
 *
 * @see ConsultaCategorias
 */
class ConsultaCategoriasBuilder
{
    /**
     * @var ConsultaCategorias
     */
    private $instance;

    private function __construct(ConsultaCategorias $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Consulta Categorias Builder object.
     *
     * @param Categoria[] $categorias
     * @param Brindes2[] $brindes
     */
    public static function init(array $categorias, array $brindes): self
    {
        return new self(new ConsultaCategorias($categorias, $brindes));
    }

    /**
     * Initializes a new Consulta Categorias object.
     */
    public function build(): ConsultaCategorias
    {
        return CoreHelper::clone($this->instance);
    }
}
