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

class AtualizarCampanhaRequest3 implements \JsonSerializable
{
    /**
     * @var int
     */
    private $idCampanhaPromocional;

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
     * @var int
     */
    private $tipoCampanhaPromocional;

    /**
     * @param int $idCampanhaPromocional
     * @param string $nomeCampanhaPromocional
     * @param string $inicioCampanhaPromocional
     * @param string $fimCampanhaPromocional
     * @param string $priorididadeCampanhaPromocional
     * @param int $tipoCampanhaPromocional
     */
    public function __construct(
        int $idCampanhaPromocional,
        string $nomeCampanhaPromocional,
        string $inicioCampanhaPromocional,
        string $fimCampanhaPromocional,
        string $priorididadeCampanhaPromocional,
        int $tipoCampanhaPromocional
    ) {
        $this->idCampanhaPromocional = $idCampanhaPromocional;
        $this->nomeCampanhaPromocional = $nomeCampanhaPromocional;
        $this->inicioCampanhaPromocional = $inicioCampanhaPromocional;
        $this->fimCampanhaPromocional = $fimCampanhaPromocional;
        $this->priorididadeCampanhaPromocional = $priorididadeCampanhaPromocional;
        $this->tipoCampanhaPromocional = $tipoCampanhaPromocional;
    }

    /**
     * Returns Id Campanha Promocional.
     */
    public function getIdCampanhaPromocional(): int
    {
        return $this->idCampanhaPromocional;
    }

    /**
     * Sets Id Campanha Promocional.
     *
     * @required
     * @maps id_campanha_promocional
     */
    public function setIdCampanhaPromocional(int $idCampanhaPromocional): void
    {
        $this->idCampanhaPromocional = $idCampanhaPromocional;
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
     * Returns Tipo Campanha Promocional.
     */
    public function getTipoCampanhaPromocional(): int
    {
        return $this->tipoCampanhaPromocional;
    }

    /**
     * Sets Tipo Campanha Promocional.
     *
     * @required
     * @maps tipo_campanha_promocional
     */
    public function setTipoCampanhaPromocional(int $tipoCampanhaPromocional): void
    {
        $this->tipoCampanhaPromocional = $tipoCampanhaPromocional;
    }

    /**
     * Converts the AtualizarCampanhaRequest3 object to a human-readable string representation.
     *
     * @return string The string representation of the AtualizarCampanhaRequest3 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AtualizarCampanhaRequest3',
            [
                'idCampanhaPromocional' => $this->idCampanhaPromocional,
                'nomeCampanhaPromocional' => $this->nomeCampanhaPromocional,
                'inicioCampanhaPromocional' => $this->inicioCampanhaPromocional,
                'fimCampanhaPromocional' => $this->fimCampanhaPromocional,
                'priorididadeCampanhaPromocional' => $this->priorididadeCampanhaPromocional,
                'tipoCampanhaPromocional' => $this->tipoCampanhaPromocional
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
        $json['id_campanha_promocional']           = $this->idCampanhaPromocional;
        $json['nome_campanha_promocional']         = $this->nomeCampanhaPromocional;
        $json['inicio_campanha_promocional']       = $this->inicioCampanhaPromocional;
        $json['fim_campanha_promocional']          = $this->fimCampanhaPromocional;
        $json['priorididade_campanha_promocional'] = $this->priorididadeCampanhaPromocional;
        $json['tipo_campanha_promocional']         = $this->tipoCampanhaPromocional;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
