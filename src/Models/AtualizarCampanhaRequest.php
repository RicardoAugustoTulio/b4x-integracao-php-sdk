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

class AtualizarCampanhaRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $nomeCampanhaPromocional;

    /**
     * @var string
     */
    private $inicioCampanhaPromocional;

    /**
     * @var string
     */
    private $fimCampanhaPromocional;

    /**
     * @var string
     */
    private $priorididadeCampanhaPromocional;

    /**
     * @param string $nomeCampanhaPromocional
     * @param string $inicioCampanhaPromocional
     * @param string $fimCampanhaPromocional
     * @param string $priorididadeCampanhaPromocional
     */
    public function __construct(
        string $nomeCampanhaPromocional,
        string $inicioCampanhaPromocional,
        string $fimCampanhaPromocional,
        string $priorididadeCampanhaPromocional
    ) {
        $this->nomeCampanhaPromocional = $nomeCampanhaPromocional;
        $this->inicioCampanhaPromocional = $inicioCampanhaPromocional;
        $this->fimCampanhaPromocional = $fimCampanhaPromocional;
        $this->priorididadeCampanhaPromocional = $priorididadeCampanhaPromocional;
    }

    /**
     * Returns Nome Campanha Promocional.
     */
    public function getNomeCampanhaPromocional(): string
    {
        return $this->nomeCampanhaPromocional;
    }

    /**
     * Sets Nome Campanha Promocional.
     *
     * @required
     * @maps nome_campanha_promocional
     */
    public function setNomeCampanhaPromocional(string $nomeCampanhaPromocional): void
    {
        $this->nomeCampanhaPromocional = $nomeCampanhaPromocional;
    }

    /**
     * Returns Inicio Campanha Promocional.
     */
    public function getInicioCampanhaPromocional(): string
    {
        return $this->inicioCampanhaPromocional;
    }

    /**
     * Sets Inicio Campanha Promocional.
     *
     * @required
     * @maps inicio_campanha_promocional
     */
    public function setInicioCampanhaPromocional(string $inicioCampanhaPromocional): void
    {
        $this->inicioCampanhaPromocional = $inicioCampanhaPromocional;
    }

    /**
     * Returns Fim Campanha Promocional.
     */
    public function getFimCampanhaPromocional(): string
    {
        return $this->fimCampanhaPromocional;
    }

    /**
     * Sets Fim Campanha Promocional.
     *
     * @required
     * @maps fim_campanha_promocional
     */
    public function setFimCampanhaPromocional(string $fimCampanhaPromocional): void
    {
        $this->fimCampanhaPromocional = $fimCampanhaPromocional;
    }

    /**
     * Returns Priorididade Campanha Promocional.
     */
    public function getPriorididadeCampanhaPromocional(): string
    {
        return $this->priorididadeCampanhaPromocional;
    }

    /**
     * Sets Priorididade Campanha Promocional.
     *
     * @required
     * @maps priorididade_campanha_promocional
     */
    public function setPriorididadeCampanhaPromocional(string $priorididadeCampanhaPromocional): void
    {
        $this->priorididadeCampanhaPromocional = $priorididadeCampanhaPromocional;
    }

    /**
     * Converts the AtualizarCampanhaRequest object to a human-readable string representation.
     *
     * @return string The string representation of the AtualizarCampanhaRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AtualizarCampanhaRequest',
            [
                'nomeCampanhaPromocional' => $this->nomeCampanhaPromocional,
                'inicioCampanhaPromocional' => $this->inicioCampanhaPromocional,
                'fimCampanhaPromocional' => $this->fimCampanhaPromocional,
                'priorididadeCampanhaPromocional' => $this->priorididadeCampanhaPromocional
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
        $json['nome_campanha_promocional']         = $this->nomeCampanhaPromocional;
        $json['inicio_campanha_promocional']       = $this->inicioCampanhaPromocional;
        $json['fim_campanha_promocional']          = $this->fimCampanhaPromocional;
        $json['priorididade_campanha_promocional'] = $this->priorididadeCampanhaPromocional;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
