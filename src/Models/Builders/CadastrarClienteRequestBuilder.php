<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\CadastrarClienteRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CadastrarClienteRequest
 *
 * @see CadastrarClienteRequest
 */
class CadastrarClienteRequestBuilder
{
    /**
     * @var CadastrarClienteRequest
     */
    private $instance;

    private function __construct(CadastrarClienteRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cadastrar Cliente Request Builder object.
     *
     * @param string $nome
     * @param string $cpfCnpj
     * @param string $email
     * @param string $dataNascimento
     * @param string $telefone
     * @param string $tipo
     * @param string $rgIe
     * @param string $contribuinteIcms
     * @param string $revendaFerramentas
     * @param string $celular
     * @param string $receberEmails
     */
    public static function init(
        string $nome,
        string $cpfCnpj,
        string $email,
        string $dataNascimento,
        string $telefone,
        string $tipo,
        string $rgIe,
        string $contribuinteIcms,
        string $revendaFerramentas,
        string $celular,
        string $receberEmails
    ): self {
        return new self(new CadastrarClienteRequest(
            $nome,
            $cpfCnpj,
            $email,
            $dataNascimento,
            $telefone,
            $tipo,
            $rgIe,
            $contribuinteIcms,
            $revendaFerramentas,
            $celular,
            $receberEmails
        ));
    }

    /**
     * Initializes a new Cadastrar Cliente Request object.
     */
    public function build(): CadastrarClienteRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
