<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\CadastrarEndereORequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CadastrarEndereORequest
 *
 * @see CadastrarEndereORequest
 */
class CadastrarEndereORequestBuilder
{
    /**
     * @var CadastrarEndereORequest
     */
    private $instance;

    private function __construct(CadastrarEndereORequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cadastrar Endere O Request Builder object.
     *
     * @param int $clienteId
     * @param string $tipo
     * @param string $cep
     * @param string $endereco
     * @param string $numero
     * @param string $bairro
     * @param string $cidade
     * @param string $uf
     * @param string $complemento
     * @param string $telefone
     * @param int $padrao
     */
    public static function init(
        int $clienteId,
        string $tipo,
        string $cep,
        string $endereco,
        string $numero,
        string $bairro,
        string $cidade,
        string $uf,
        string $complemento,
        string $telefone,
        int $padrao
    ): self {
        return new self(new CadastrarEndereORequest(
            $clienteId,
            $tipo,
            $cep,
            $endereco,
            $numero,
            $bairro,
            $cidade,
            $uf,
            $complemento,
            $telefone,
            $padrao
        ));
    }

    /**
     * Initializes a new Cadastrar Endere O Request object.
     */
    public function build(): CadastrarEndereORequest
    {
        return CoreHelper::clone($this->instance);
    }
}
