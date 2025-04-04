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

class Brindes implements \JsonSerializable
{
    /**
     * @var string
     */
    private $idCampanhaBrinde;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $nome;

    /**
     * @param string $idCampanhaBrinde
     * @param string $sku
     * @param string $nome
     */
    public function __construct(string $idCampanhaBrinde, string $sku, string $nome)
    {
        $this->idCampanhaBrinde = $idCampanhaBrinde;
        $this->sku = $sku;
        $this->nome = $nome;
    }

    /**
     * Returns Id Campanha Brinde.
     */
    public function getIdCampanhaBrinde(): string
    {
        return $this->idCampanhaBrinde;
    }

    /**
     * Sets Id Campanha Brinde.
     *
     * @required
     * @maps id_campanha_brinde
     */
    public function setIdCampanhaBrinde(string $idCampanhaBrinde): void
    {
        $this->idCampanhaBrinde = $idCampanhaBrinde;
    }

    /**
     * Returns Sku.
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * Sets Sku.
     *
     * @required
     * @maps sku
     */
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * Returns Nome.
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Sets Nome.
     *
     * @required
     * @maps nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * Converts the Brindes object to a human-readable string representation.
     *
     * @return string The string representation of the Brindes object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Brindes',
            ['idCampanhaBrinde' => $this->idCampanhaBrinde, 'sku' => $this->sku, 'nome' => $this->nome]
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
        $json['id_campanha_brinde'] = $this->idCampanhaBrinde;
        $json['sku']                = $this->sku;
        $json['nome']               = $this->nome;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
