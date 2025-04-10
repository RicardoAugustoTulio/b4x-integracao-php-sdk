<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\ProdutosFiliaisRequest1;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProdutosFiliaisRequest1
 *
 * @see ProdutosFiliaisRequest1
 */
class ProdutosFiliaisRequest1Builder
{
    /**
     * @var ProdutosFiliaisRequest1
     */
    private $instance;

    private function __construct(ProdutosFiliaisRequest1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Produtos Filiais Request 1 Builder object.
     *
     * @param string $sku
     */
    public static function init(string $sku): self
    {
        return new self(new ProdutosFiliaisRequest1($sku));
    }

    /**
     * Initializes a new Produtos Filiais Request 1 object.
     */
    public function build(): ProdutosFiliaisRequest1
    {
        return CoreHelper::clone($this->instance);
    }
}
