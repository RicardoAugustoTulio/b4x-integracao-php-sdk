<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\Campanha;
use Core\Utils\CoreHelper;

/**
 * Builder for model Campanha
 *
 * @see Campanha
 */
class CampanhaBuilder
{
    /**
     * @var Campanha
     */
    private $instance;

    private function __construct(Campanha $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Campanha Builder object.
     *
     * @param string $idOferta
     * @param string $campanhaBrindes
     * @param string $valorTotalCarrinho
     * @param string $quantidadeTotalCarrinho
     */
    public static function init(
        string $idOferta,
        string $campanhaBrindes,
        string $valorTotalCarrinho,
        string $quantidadeTotalCarrinho
    ): self {
        return new self(new Campanha($idOferta, $campanhaBrindes, $valorTotalCarrinho, $quantidadeTotalCarrinho));
    }

    /**
     * Initializes a new Campanha object.
     */
    public function build(): Campanha
    {
        return CoreHelper::clone($this->instance);
    }
}
