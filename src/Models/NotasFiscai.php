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

class NotasFiscai implements \JsonSerializable
{
    /**
     * @var string
     */
    private $data;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $numero;

    /**
     * @var string
     */
    private $chave;

    /**
     * @var string
     */
    private $xml;

    /**
     * @var string
     */
    private $codigoFornecedor;

    /**
     * @var string
     */
    private $urlDownload;

    /**
     * @param string $data
     * @param string $tipo
     * @param string $numero
     * @param string $chave
     * @param string $xml
     * @param string $codigoFornecedor
     * @param string $urlDownload
     */
    public function __construct(
        string $data,
        string $tipo,
        string $numero,
        string $chave,
        string $xml,
        string $codigoFornecedor,
        string $urlDownload
    ) {
        $this->data = $data;
        $this->tipo = $tipo;
        $this->numero = $numero;
        $this->chave = $chave;
        $this->xml = $xml;
        $this->codigoFornecedor = $codigoFornecedor;
        $this->urlDownload = $urlDownload;
    }

    /**
     * Returns Data.
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @required
     * @maps data
     */
    public function setData(string $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Tipo.
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Sets Tipo.
     *
     * @required
     * @maps tipo
     */
    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * Returns Numero.
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * Sets Numero.
     *
     * @required
     * @maps numero
     */
    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    /**
     * Returns Chave.
     */
    public function getChave(): string
    {
        return $this->chave;
    }

    /**
     * Sets Chave.
     *
     * @required
     * @maps chave
     */
    public function setChave(string $chave): void
    {
        $this->chave = $chave;
    }

    /**
     * Returns Xml.
     */
    public function getXml(): string
    {
        return $this->xml;
    }

    /**
     * Sets Xml.
     *
     * @required
     * @maps xml
     */
    public function setXml(string $xml): void
    {
        $this->xml = $xml;
    }

    /**
     * Returns Codigo Fornecedor.
     */
    public function getCodigoFornecedor(): string
    {
        return $this->codigoFornecedor;
    }

    /**
     * Sets Codigo Fornecedor.
     *
     * @required
     * @maps codigo_fornecedor
     */
    public function setCodigoFornecedor(string $codigoFornecedor): void
    {
        $this->codigoFornecedor = $codigoFornecedor;
    }

    /**
     * Returns Url Download.
     */
    public function getUrlDownload(): string
    {
        return $this->urlDownload;
    }

    /**
     * Sets Url Download.
     *
     * @required
     * @maps url_download
     */
    public function setUrlDownload(string $urlDownload): void
    {
        $this->urlDownload = $urlDownload;
    }

    /**
     * Converts the NotasFiscai object to a human-readable string representation.
     *
     * @return string The string representation of the NotasFiscai object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'NotasFiscai',
            [
                'data' => $this->data,
                'tipo' => $this->tipo,
                'numero' => $this->numero,
                'chave' => $this->chave,
                'xml' => $this->xml,
                'codigoFornecedor' => $this->codigoFornecedor,
                'urlDownload' => $this->urlDownload
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
        $json['data']              = $this->data;
        $json['tipo']              = $this->tipo;
        $json['numero']            = $this->numero;
        $json['chave']             = $this->chave;
        $json['xml']               = $this->xml;
        $json['codigo_fornecedor'] = $this->codigoFornecedor;
        $json['url_download']      = $this->urlDownload;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
