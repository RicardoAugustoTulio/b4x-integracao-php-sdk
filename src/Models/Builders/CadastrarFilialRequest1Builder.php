<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\CadastrarFilialRequest1;
use Core\Utils\CoreHelper;

/**
 * Builder for model CadastrarFilialRequest1
 *
 * @see CadastrarFilialRequest1
 */
class CadastrarFilialRequest1Builder
{
    /**
     * @var CadastrarFilialRequest1
     */
    private $instance;

    private function __construct(CadastrarFilialRequest1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cadastrar Filial Request 1 Builder object.
     *
     * @param int $codigo
     * @param string $razaoSocial
     * @param string $cnpj
     * @param int $status
     * @param int $prioridade
     * @param string[] $logisticas
     */
    public static function init(
        int $codigo,
        string $razaoSocial,
        string $cnpj,
        int $status,
        int $prioridade,
        array $logisticas
    ): self {
        return new self(
            new CadastrarFilialRequest1($codigo, $razaoSocial, $cnpj, $status, $prioridade, $logisticas)
        );
    }

    /**
     * Initializes a new Cadastrar Filial Request 1 object.
     */
    public function build(): CadastrarFilialRequest1
    {
        return CoreHelper::clone($this->instance);
    }
}
