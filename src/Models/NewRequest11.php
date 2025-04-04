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

class NewRequest11 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var int
     */
    private $tipo;

    /**
     * @var string
     */
    private $cpfCnpj;

    /**
     * @param string $nome
     * @param int $tipo
     * @param string $cpfCnpj
     */
    public function __construct(string $nome, int $tipo, string $cpfCnpj)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->cpfCnpj = $cpfCnpj;
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
     * Returns Tipo.
     */
    public function getTipo(): int
    {
        return $this->tipo;
    }

    /**
     * Sets Tipo.
     *
     * @required
     * @maps tipo
     */
    public function setTipo(int $tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * Returns Cpf Cnpj.
     */
    public function getCpfCnpj(): string
    {
        return $this->cpfCnpj;
    }

    /**
     * Sets Cpf Cnpj.
     *
     * @required
     * @maps cpf_cnpj
     */
    public function setCpfCnpj(string $cpfCnpj): void
    {
        $this->cpfCnpj = $cpfCnpj;
    }

    /**
     * Converts the NewRequest11 object to a human-readable string representation.
     *
     * @return string The string representation of the NewRequest11 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'NewRequest11',
            ['nome' => $this->nome, 'tipo' => $this->tipo, 'cpfCnpj' => $this->cpfCnpj]
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
        $json['nome']     = $this->nome;
        $json['tipo']     = $this->tipo;
        $json['cpf_cnpj'] = $this->cpfCnpj;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
