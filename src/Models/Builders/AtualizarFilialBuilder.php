<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\AtualizarFilial;
use Core\Utils\CoreHelper;

/**
 * Builder for model AtualizarFilial
 *
 * @see AtualizarFilial
 */
class AtualizarFilialBuilder
{
    /**
     * @var AtualizarFilial
     */
    private $instance;

    private function __construct(AtualizarFilial $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Atualizar Filial Builder object.
     *
     * @param string $message
     * @param string $responseCode
     */
    public static function init(string $message, string $responseCode): self
    {
        return new self(new AtualizarFilial($message, $responseCode));
    }

    /**
     * Initializes a new Atualizar Filial object.
     */
    public function build(): AtualizarFilial
    {
        return CoreHelper::clone($this->instance);
    }
}
