<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\AtualizarCategoriaRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model AtualizarCategoriaRequest
 *
 * @see AtualizarCategoriaRequest
 */
class AtualizarCategoriaRequestBuilder
{
    /**
     * @var AtualizarCategoriaRequest
     */
    private $instance;

    private function __construct(AtualizarCategoriaRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Atualizar Categoria Request Builder object.
     *
     * @param string $descricao
     * @param string $codigoPai
     */
    public static function init(string $descricao, string $codigoPai): self
    {
        return new self(new AtualizarCategoriaRequest($descricao, $codigoPai));
    }

    /**
     * Initializes a new Atualizar Categoria Request object.
     */
    public function build(): AtualizarCategoriaRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
