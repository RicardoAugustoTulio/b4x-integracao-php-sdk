<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib\Models\Builders;

use ApiB4CLib\Models\CadastraCampanhaRequest3;
use Core\Utils\CoreHelper;

/**
 * Builder for model CadastraCampanhaRequest3
 *
 * @see CadastraCampanhaRequest3
 */
class CadastraCampanhaRequest3Builder
{
    /**
     * @var CadastraCampanhaRequest3
     */
    private $instance;

    private function __construct(CadastraCampanhaRequest3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cadastra Campanha Request 3 Builder object.
     *
     * @param int $idCampanhaPromocional
     * @param string $nomeCampanhaPromocional
     * @param string $inicioCampanhaPromocional
     * @param string $fimCampanhaPromocional
     * @param string $priorididadeCampanhaPromocional
     * @param int $tipoCampanhaPromocional
     */
    public static function init(
        int $idCampanhaPromocional,
        string $nomeCampanhaPromocional,
        string $inicioCampanhaPromocional,
        string $fimCampanhaPromocional,
        string $priorididadeCampanhaPromocional,
        int $tipoCampanhaPromocional
    ): self {
        return new self(new CadastraCampanhaRequest3(
            $idCampanhaPromocional,
            $nomeCampanhaPromocional,
            $inicioCampanhaPromocional,
            $fimCampanhaPromocional,
            $priorididadeCampanhaPromocional,
            $tipoCampanhaPromocional
        ));
    }

    /**
     * Initializes a new Cadastra Campanha Request 3 object.
     */
    public function build(): CadastraCampanhaRequest3
    {
        return CoreHelper::clone($this->instance);
    }
}
