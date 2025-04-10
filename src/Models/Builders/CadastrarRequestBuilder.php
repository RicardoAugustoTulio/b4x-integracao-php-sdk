<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\CadastrarRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CadastrarRequest
 *
 * @see CadastrarRequest
 */
class CadastrarRequestBuilder
{
    /**
     * @var CadastrarRequest
     */
    private $instance;

    private function __construct(CadastrarRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cadastrar Request Builder object.
     *
     * @param string $codigo
     * @param string $nome
     */
    public static function init(string $codigo, string $nome): self
    {
        return new self(new CadastrarRequest($codigo, $nome));
    }

    /**
     * Initializes a new Cadastrar Request object.
     */
    public function build(): CadastrarRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
