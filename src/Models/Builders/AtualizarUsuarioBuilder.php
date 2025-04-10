<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\AtualizarUsuario;
use Core\Utils\CoreHelper;

/**
 * Builder for model AtualizarUsuario
 *
 * @see AtualizarUsuario
 */
class AtualizarUsuarioBuilder
{
    /**
     * @var AtualizarUsuario
     */
    private $instance;

    private function __construct(AtualizarUsuario $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Atualizar Usuario Builder object.
     *
     * @param string $message
     * @param string $responseCode
     */
    public static function init(string $message, string $responseCode): self
    {
        return new self(new AtualizarUsuario($message, $responseCode));
    }

    /**
     * Initializes a new Atualizar Usuario object.
     */
    public function build(): AtualizarUsuario
    {
        return CoreHelper::clone($this->instance);
    }
}
