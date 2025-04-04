<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\AtualizarObservaORequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model AtualizarObservaORequest
 *
 * @see AtualizarObservaORequest
 */
class AtualizarObservaORequestBuilder
{
    /**
     * @var AtualizarObservaORequest
     */
    private $instance;

    private function __construct(AtualizarObservaORequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Atualizar Observa O Request Builder object.
     *
     * @param string $observacao
     */
    public static function init(string $observacao): self
    {
        return new self(new AtualizarObservaORequest($observacao));
    }

    /**
     * Initializes a new Atualizar Observa O Request object.
     */
    public function build(): AtualizarObservaORequest
    {
        return CoreHelper::clone($this->instance);
    }
}
