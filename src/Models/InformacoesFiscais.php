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

class InformacoesFiscais implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $ipi;

    /**
     * @var string
     */
    private $cfop;

    /**
     * @var string
     */
    private $ncm;

    /**
     * @var string
     */
    private $cest;

    /**
     * @var string
     */
    private $cst;

    /**
     * @var string
     */
    private $icms;

    /**
     * @var string|null
     */
    private $reducaoIcms;

    /**
     * @var string
     */
    private $icmsSt;

    /**
     * @var string
     */
    private $diferimentoParcial;

    /**
     * @var string
     */
    private $mva;

    /**
     * @var string
     */
    private $origem;

    /**
     * @var string
     */
    private $tipoOrigem;

    /**
     * @var string
     */
    private $csosn;

    /**
     * @param string $cfop
     * @param string $ncm
     * @param string $cest
     * @param string $cst
     * @param string $icms
     * @param string $icmsSt
     * @param string $diferimentoParcial
     * @param string $mva
     * @param string $origem
     * @param string $tipoOrigem
     * @param string $csosn
     */
    public function __construct(
        string $cfop,
        string $ncm,
        string $cest,
        string $cst,
        string $icms,
        string $icmsSt,
        string $diferimentoParcial,
        string $mva,
        string $origem,
        string $tipoOrigem,
        string $csosn
    ) {
        $this->cfop = $cfop;
        $this->ncm = $ncm;
        $this->cest = $cest;
        $this->cst = $cst;
        $this->icms = $icms;
        $this->icmsSt = $icmsSt;
        $this->diferimentoParcial = $diferimentoParcial;
        $this->mva = $mva;
        $this->origem = $origem;
        $this->tipoOrigem = $tipoOrigem;
        $this->csosn = $csosn;
    }

    /**
     * Returns Ipi.
     */
    public function getIpi(): ?string
    {
        return $this->ipi;
    }

    /**
     * Sets Ipi.
     *
     * @maps ipi
     */
    public function setIpi(?string $ipi): void
    {
        $this->ipi = $ipi;
    }

    /**
     * Returns Cfop.
     */
    public function getCfop(): string
    {
        return $this->cfop;
    }

    /**
     * Sets Cfop.
     *
     * @required
     * @maps cfop
     */
    public function setCfop(string $cfop): void
    {
        $this->cfop = $cfop;
    }

    /**
     * Returns Ncm.
     */
    public function getNcm(): string
    {
        return $this->ncm;
    }

    /**
     * Sets Ncm.
     *
     * @required
     * @maps ncm
     */
    public function setNcm(string $ncm): void
    {
        $this->ncm = $ncm;
    }

    /**
     * Returns Cest.
     */
    public function getCest(): string
    {
        return $this->cest;
    }

    /**
     * Sets Cest.
     *
     * @required
     * @maps cest
     */
    public function setCest(string $cest): void
    {
        $this->cest = $cest;
    }

    /**
     * Returns Cst.
     */
    public function getCst(): string
    {
        return $this->cst;
    }

    /**
     * Sets Cst.
     *
     * @required
     * @maps cst
     */
    public function setCst(string $cst): void
    {
        $this->cst = $cst;
    }

    /**
     * Returns Icms.
     */
    public function getIcms(): string
    {
        return $this->icms;
    }

    /**
     * Sets Icms.
     *
     * @required
     * @maps icms
     */
    public function setIcms(string $icms): void
    {
        $this->icms = $icms;
    }

    /**
     * Returns Reducao Icms.
     */
    public function getReducaoIcms(): ?string
    {
        return $this->reducaoIcms;
    }

    /**
     * Sets Reducao Icms.
     *
     * @maps reducao_icms
     */
    public function setReducaoIcms(?string $reducaoIcms): void
    {
        $this->reducaoIcms = $reducaoIcms;
    }

    /**
     * Returns Icms St.
     */
    public function getIcmsSt(): string
    {
        return $this->icmsSt;
    }

    /**
     * Sets Icms St.
     *
     * @required
     * @maps icms_st
     */
    public function setIcmsSt(string $icmsSt): void
    {
        $this->icmsSt = $icmsSt;
    }

    /**
     * Returns Diferimento Parcial.
     */
    public function getDiferimentoParcial(): string
    {
        return $this->diferimentoParcial;
    }

    /**
     * Sets Diferimento Parcial.
     *
     * @required
     * @maps diferimento_parcial
     */
    public function setDiferimentoParcial(string $diferimentoParcial): void
    {
        $this->diferimentoParcial = $diferimentoParcial;
    }

    /**
     * Returns Mva.
     */
    public function getMva(): string
    {
        return $this->mva;
    }

    /**
     * Sets Mva.
     *
     * @required
     * @maps mva
     */
    public function setMva(string $mva): void
    {
        $this->mva = $mva;
    }

    /**
     * Returns Origem.
     */
    public function getOrigem(): string
    {
        return $this->origem;
    }

    /**
     * Sets Origem.
     *
     * @required
     * @maps origem
     */
    public function setOrigem(string $origem): void
    {
        $this->origem = $origem;
    }

    /**
     * Returns Tipo Origem.
     */
    public function getTipoOrigem(): string
    {
        return $this->tipoOrigem;
    }

    /**
     * Sets Tipo Origem.
     *
     * @required
     * @maps tipo_origem
     */
    public function setTipoOrigem(string $tipoOrigem): void
    {
        $this->tipoOrigem = $tipoOrigem;
    }

    /**
     * Returns Csosn.
     */
    public function getCsosn(): string
    {
        return $this->csosn;
    }

    /**
     * Sets Csosn.
     *
     * @required
     * @maps csosn
     */
    public function setCsosn(string $csosn): void
    {
        $this->csosn = $csosn;
    }

    /**
     * Converts the InformacoesFiscais object to a human-readable string representation.
     *
     * @return string The string representation of the InformacoesFiscais object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'InformacoesFiscais',
            [
                'ipi' => $this->ipi,
                'cfop' => $this->cfop,
                'ncm' => $this->ncm,
                'cest' => $this->cest,
                'cst' => $this->cst,
                'icms' => $this->icms,
                'reducaoIcms' => $this->reducaoIcms,
                'icmsSt' => $this->icmsSt,
                'diferimentoParcial' => $this->diferimentoParcial,
                'mva' => $this->mva,
                'origem' => $this->origem,
                'tipoOrigem' => $this->tipoOrigem,
                'csosn' => $this->csosn
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
        $json['ipi']                 = $this->ipi;
        $json['cfop']                = $this->cfop;
        $json['ncm']                 = $this->ncm;
        $json['cest']                = $this->cest;
        $json['cst']                 = $this->cst;
        $json['icms']                = $this->icms;
        $json['reducao_icms']        = $this->reducaoIcms;
        $json['icms_st']             = $this->icmsSt;
        $json['diferimento_parcial'] = $this->diferimentoParcial;
        $json['mva']                 = $this->mva;
        $json['origem']              = $this->origem;
        $json['tipo_origem']         = $this->tipoOrigem;
        $json['csosn']               = $this->csosn;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
