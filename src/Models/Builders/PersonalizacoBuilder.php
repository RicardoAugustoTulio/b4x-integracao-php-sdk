<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\Personalizaco;
use Core\Utils\CoreHelper;

/**
 * Builder for model Personalizaco
 *
 * @see Personalizaco
 */
class PersonalizacoBuilder
{
    /**
     * @var Personalizaco
     */
    private $instance;

    private function __construct(Personalizaco $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Personalizaco Builder object.
     *
     * @param string $sku
     * @param int $nivel
     * @param int $tipo
     * @param int $arteFinalista
     */
    public static function init(string $sku, int $nivel, int $tipo, int $arteFinalista): self
    {
        return new self(new Personalizaco($sku, $nivel, $tipo, $arteFinalista));
    }

    /**
     * Initializes a new Personalizaco object.
     */
    public function build(): Personalizaco
    {
        return CoreHelper::clone($this->instance);
    }
}
