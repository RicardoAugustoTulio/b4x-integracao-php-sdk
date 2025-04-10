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

class Estoque implements \JsonSerializable
{
    /**
     * @var string
     */
    private $filialErp;

    /**
     * @var string
     */
    private $quantidade;

    /**
     * @var string
     */
    private $estoqueDiasSemVenda;

    /**
     * @var string
     */
    private $estoqueDiasDisponivel;

    /**
     * @var string
     */
    private $estoqueQuantidadeFaseCompra;

    /**
     * @var string
     */
    private $quantidadeVendida;

    /**
     * @var string
     */
    private $considerarEstoque;

    /**
     * @var string
     */
    private $crossdocking;

    /**
     * @var string
     */
    private $quantidadeTelevenda;

    /**
     * @var int
     */
    private $depositoExterno;

    /**
     * @var string
     */
    private $estoqueExterno;

    /**
     * @var string
     */
    private $loteId;

    /**
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
    public function __construct(
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
    ) {
        $this->filialErp = $filialErp;
        $this->quantidade = $quantidade;
        $this->estoqueDiasSemVenda = $estoqueDiasSemVenda;
        $this->estoqueDiasDisponivel = $estoqueDiasDisponivel;
        $this->estoqueQuantidadeFaseCompra = $estoqueQuantidadeFaseCompra;
        $this->quantidadeVendida = $quantidadeVendida;
        $this->considerarEstoque = $considerarEstoque;
        $this->crossdocking = $crossdocking;
        $this->quantidadeTelevenda = $quantidadeTelevenda;
        $this->depositoExterno = $depositoExterno;
        $this->estoqueExterno = $estoqueExterno;
        $this->loteId = $loteId;
    }

    /**
     * Returns Filial Erp.
     */
    public function getFilialErp(): string
    {
        return $this->filialErp;
    }

    /**
     * Sets Filial Erp.
     *
     * @required
     * @maps filial_erp
     */
    public function setFilialErp(string $filialErp): void
    {
        $this->filialErp = $filialErp;
    }

    /**
     * Returns Quantidade.
     */
    public function getQuantidade(): string
    {
        return $this->quantidade;
    }

    /**
     * Sets Quantidade.
     *
     * @required
     * @maps quantidade
     */
    public function setQuantidade(string $quantidade): void
    {
        $this->quantidade = $quantidade;
    }

    /**
     * Returns Estoque Dias Sem Venda.
     */
    public function getEstoqueDiasSemVenda(): string
    {
        return $this->estoqueDiasSemVenda;
    }

    /**
     * Sets Estoque Dias Sem Venda.
     *
     * @required
     * @maps estoque_dias_sem_venda
     */
    public function setEstoqueDiasSemVenda(string $estoqueDiasSemVenda): void
    {
        $this->estoqueDiasSemVenda = $estoqueDiasSemVenda;
    }

    /**
     * Returns Estoque Dias Disponivel.
     */
    public function getEstoqueDiasDisponivel(): string
    {
        return $this->estoqueDiasDisponivel;
    }

    /**
     * Sets Estoque Dias Disponivel.
     *
     * @required
     * @maps estoque_dias_disponivel
     */
    public function setEstoqueDiasDisponivel(string $estoqueDiasDisponivel): void
    {
        $this->estoqueDiasDisponivel = $estoqueDiasDisponivel;
    }

    /**
     * Returns Estoque Quantidade Fase Compra.
     */
    public function getEstoqueQuantidadeFaseCompra(): string
    {
        return $this->estoqueQuantidadeFaseCompra;
    }

    /**
     * Sets Estoque Quantidade Fase Compra.
     *
     * @required
     * @maps estoque_quantidade_fase_compra
     */
    public function setEstoqueQuantidadeFaseCompra(string $estoqueQuantidadeFaseCompra): void
    {
        $this->estoqueQuantidadeFaseCompra = $estoqueQuantidadeFaseCompra;
    }

    /**
     * Returns Quantidade Vendida.
     */
    public function getQuantidadeVendida(): string
    {
        return $this->quantidadeVendida;
    }

    /**
     * Sets Quantidade Vendida.
     *
     * @required
     * @maps quantidade_vendida
     */
    public function setQuantidadeVendida(string $quantidadeVendida): void
    {
        $this->quantidadeVendida = $quantidadeVendida;
    }

    /**
     * Returns Considerar Estoque.
     */
    public function getConsiderarEstoque(): string
    {
        return $this->considerarEstoque;
    }

    /**
     * Sets Considerar Estoque.
     *
     * @required
     * @maps considerar_estoque
     */
    public function setConsiderarEstoque(string $considerarEstoque): void
    {
        $this->considerarEstoque = $considerarEstoque;
    }

    /**
     * Returns Crossdocking.
     */
    public function getCrossdocking(): string
    {
        return $this->crossdocking;
    }

    /**
     * Sets Crossdocking.
     *
     * @required
     * @maps crossdocking
     */
    public function setCrossdocking(string $crossdocking): void
    {
        $this->crossdocking = $crossdocking;
    }

    /**
     * Returns Quantidade Televenda.
     */
    public function getQuantidadeTelevenda(): string
    {
        return $this->quantidadeTelevenda;
    }

    /**
     * Sets Quantidade Televenda.
     *
     * @required
     * @maps quantidade_televenda
     */
    public function setQuantidadeTelevenda(string $quantidadeTelevenda): void
    {
        $this->quantidadeTelevenda = $quantidadeTelevenda;
    }

    /**
     * Returns Deposito Externo.
     */
    public function getDepositoExterno(): int
    {
        return $this->depositoExterno;
    }

    /**
     * Sets Deposito Externo.
     *
     * @required
     * @maps deposito_externo
     */
    public function setDepositoExterno(int $depositoExterno): void
    {
        $this->depositoExterno = $depositoExterno;
    }

    /**
     * Returns Estoque Externo.
     */
    public function getEstoqueExterno(): string
    {
        return $this->estoqueExterno;
    }

    /**
     * Sets Estoque Externo.
     *
     * @required
     * @maps estoque_externo
     */
    public function setEstoqueExterno(string $estoqueExterno): void
    {
        $this->estoqueExterno = $estoqueExterno;
    }

    /**
     * Returns Lote Id.
     */
    public function getLoteId(): string
    {
        return $this->loteId;
    }

    /**
     * Sets Lote Id.
     *
     * @required
     * @maps lote_id
     */
    public function setLoteId(string $loteId): void
    {
        $this->loteId = $loteId;
    }

    /**
     * Converts the Estoque object to a human-readable string representation.
     *
     * @return string The string representation of the Estoque object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Estoque',
            [
                'filialErp' => $this->filialErp,
                'quantidade' => $this->quantidade,
                'estoqueDiasSemVenda' => $this->estoqueDiasSemVenda,
                'estoqueDiasDisponivel' => $this->estoqueDiasDisponivel,
                'estoqueQuantidadeFaseCompra' => $this->estoqueQuantidadeFaseCompra,
                'quantidadeVendida' => $this->quantidadeVendida,
                'considerarEstoque' => $this->considerarEstoque,
                'crossdocking' => $this->crossdocking,
                'quantidadeTelevenda' => $this->quantidadeTelevenda,
                'depositoExterno' => $this->depositoExterno,
                'estoqueExterno' => $this->estoqueExterno,
                'loteId' => $this->loteId
            ]
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
        $json['filial_erp']                     = $this->filialErp;
        $json['quantidade']                     = $this->quantidade;
        $json['estoque_dias_sem_venda']         = $this->estoqueDiasSemVenda;
        $json['estoque_dias_disponivel']        = $this->estoqueDiasDisponivel;
        $json['estoque_quantidade_fase_compra'] = $this->estoqueQuantidadeFaseCompra;
        $json['quantidade_vendida']             = $this->quantidadeVendida;
        $json['considerar_estoque']             = $this->considerarEstoque;
        $json['crossdocking']                   = $this->crossdocking;
        $json['quantidade_televenda']           = $this->quantidadeTelevenda;
        $json['deposito_externo']               = $this->depositoExterno;
        $json['estoque_externo']                = $this->estoqueExterno;
        $json['lote_id']                        = $this->loteId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
