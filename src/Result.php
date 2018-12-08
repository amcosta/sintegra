<?php

namespace Sintegra;

class Result implements ResultInterface
{
    /**
     * @var string
     */
    private $source;

    public function __construct(string $html)
    {
        $this->source = $html;
    }

    public function getRazaoSocial(): string
    {
        // TODO: Implement getRazaoSocial() method.
    }

    public function getIdentificacao(): string
    {
        // TODO: Implement getIdentificacao() method.
    }

    public function getCNPJ(): string
    {
        // TODO: Implement getCNPJ() method.
    }

    public function getIE(): string
    {
        // TODO: Implement getIE() method.
    }

    public function getLogradouro(): string
    {
        // TODO: Implement getLogradouro() method.
    }

    public function getBairro(): string
    {
        // TODO: Implement getBairro() method.
    }

    public function getNumero(): string
    {
        // TODO: Implement getNumero() method.
    }

    public function getMunicipio(): string
    {
        // TODO: Implement getMunicipio() method.
    }

    public function getComplemento(): string
    {
        // TODO: Implement getComplemento() method.
    }

    public function getUF(): string
    {
        // TODO: Implement getUF() method.
    }

    public function getTelefone(): string
    {
        // TODO: Implement getTelefone() method.
    }

    public function getCEP(): string
    {
        // TODO: Implement getCEP() method.
    }

    public function getAtividadeEconomica(): string
    {
        // TODO: Implement getAtividadeEconomica() method.
    }

    public function getDataInicioAtividade(): string
    {
        // TODO: Implement getDataInicioAtividade() method.
    }

    public function getSituacaoCadastralVigente(): string
    {
        // TODO: Implement getSituacaoCadastralVigente() method.
    }

    public function getDataSituacaoCadastral(): string
    {
        // TODO: Implement getDataSituacaoCadastral() method.
    }

    public function getRegimeDeApuracao(): string
    {
        // TODO: Implement getRegimeDeApuracao() method.
    }

}