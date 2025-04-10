<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\Estoque;
use Core\Utils\CoreHelper;

/**
 * Builder for model Estoque
 *
 * @see Estoque
 */
class EstoqueBuilder
{
    /**
     * @var Estoque
     */
    private $instance;

    private function __construct(Estoque $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Estoque Builder object.
     *
     * @param string $filialErp
     * @param string $quantidade
     * @param string $estoqueDiasSemVenda
     * @param string $estoqueDiasDisponivel
     * @param string $estoqueQuantidadeFaseCompra
     * @param string $quantidadeVendida
     * @param string $considerarEstoque
     * @param string $crossdocking
     * @param string $quantidadeTelevenda
     * @param int $depositoExterno
     * @param string $estoqueExterno
     * @param string $loteId
     */
    public static function init(
        string $filialErp,
        string $quantidade,
        string $estoqueDiasSemVenda,
        string $estoqueDiasDisponivel,
        string $estoqueQuantidadeFaseCompra,
        string $quantidadeVendida,
        string $considerarEstoque,
        string $crossdocking,
        string $quantidadeTelevenda,
        int $depositoExterno,
        string $estoqueExterno,
        string $loteId
    ): self {
        return new self(new Estoque(
            $filialErp,
            $quantidade,
            $estoqueDiasSemVenda,
            $estoqueDiasDisponivel,
            $estoqueQuantidadeFaseCompra,
            $quantidadeVendida,
            $considerarEstoque,
            $crossdocking,
            $quantidadeTelevenda,
            $depositoExterno,
            $estoqueExterno,
            $loteId
        ));
    }

    /**
     * Initializes a new Estoque object.
     */
    public function build(): Estoque
    {
        return CoreHelper::clone($this->instance);
    }
}
