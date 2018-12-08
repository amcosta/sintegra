<?php

namespace Sintegra;

interface ResultInterface
{
    public function getRazaoSocial(): string;

    public function getIdentificacao(): string;

    public function getCNPJ(): string;

    public function getIE(): string;

    public function getLogradouro(): string;

    public function getBairro(): string;

    public function getNumero(): string;

    public function getMunicipio(): string;

    public function getComplemento(): string;

    public function getUF(): string;

    public function getTelefone(): string;

    public function getCEP(): string;

    public function getAtividadeEconomica(): string;

    public function getDataInicioAtividade(): string;

    public function getSituacaoCadastralVigente(): string;

    public function getDataSituacaoCadastral(): string;

    public function getRegimeDeApuracao(): string;
}