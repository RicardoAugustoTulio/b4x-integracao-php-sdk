<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models;

use ApiB4CLib\ApiHelper;
use stdClass;

class CadastraProdutosRequest implements \JsonSerializable
{
    /**
     * @var Produto[]
     */
    private $produtos;

    /**
     * @var Brinde[]
     */
    private $brindes;

    /**
     * @param Produto[] $produtos
     * @param Brinde[] $brindes
     */
    public function __construct(array $produtos, array $brindes)
    {
        $this->produtos = $produtos;
        $this->brindes = $brindes;
    }

    /**
     * Returns Produtos.
     *
     * @return Produto[]
     */
    public function getProdutos(): array
    {
        return $this->produtos;
    }

    /**
     * Sets Produtos.
     *
     * @required
     * @maps produtos
     *
     * @param Produto[] $produtos
     */
    public function setProdutos(array $produtos): void
    {
        $this->produtos = $produtos;
    }

    /**
     * Returns Brindes.
     *
     * @return Brinde[]
     */
    public function getBrindes(): array
    {
        return $this->brindes;
    }

    /**
     * Sets Brindes.
     *
     * @required
     * @maps brindes
     *
     * @param Brinde[] $brindes
     */
    public function setBrindes(array $brindes): void
    {
        $this->brindes = $brindes;
    }

    /**
     * Converts the CadastraProdutosRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CadastraProdutosRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CadastraProdutosRequest',
            ['produtos' => $this->produtos, 'brindes' => $this->brindes]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['produtos'] = $this->produtos;
        $json['brindes']  = $this->brindes;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
