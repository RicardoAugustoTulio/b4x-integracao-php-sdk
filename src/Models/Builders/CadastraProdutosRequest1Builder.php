<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\CadastraProdutosRequest1;
use Core\Utils\CoreHelper;

/**
 * Builder for model CadastraProdutosRequest1
 *
 * @see CadastraProdutosRequest1
 */
class CadastraProdutosRequest1Builder
{
    /**
     * @var CadastraProdutosRequest1
     */
    private $instance;

    private function __construct(CadastraProdutosRequest1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cadastra Produtos Request 1 Builder object.
     *
     * @param string[] $produtos
     */
    public static function init(array $produtos): self
    {
        return new self(new CadastraProdutosRequest1($produtos));
    }

    /**
     * Initializes a new Cadastra Produtos Request 1 object.
     */
    public function build(): CadastraProdutosRequest1
    {
        return CoreHelper::clone($this->instance);
    }
}
