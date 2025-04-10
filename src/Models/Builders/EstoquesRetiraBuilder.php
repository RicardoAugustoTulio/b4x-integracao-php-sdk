<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\EstoquesRetira;
use Core\Utils\CoreHelper;

/**
 * Builder for model EstoquesRetira
 *
 * @see EstoquesRetira
 */
class EstoquesRetiraBuilder
{
    /**
     * @var EstoquesRetira
     */
    private $instance;

    private function __construct(EstoquesRetira $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Estoques Retira Builder object.
     *
     * @param string $filialErp
     * @param string $quantidade
     * @param string $considerarEstoque
     * @param string $loteId
     */
    public static function init(string $filialErp, string $quantidade, string $considerarEstoque, string $loteId): self
    {
        return new self(new EstoquesRetira($filialErp, $quantidade, $considerarEstoque, $loteId));
    }

    /**
     * Initializes a new Estoques Retira object.
     */
    public function build(): EstoquesRetira
    {
        return CoreHelper::clone($this->instance);
    }
}
