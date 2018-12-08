<?php

namespace Sintegra;

class Result implements ResultInterface, \JsonSerializable
{
    /**
     * @var string
     */
    private $source;

    public function __construct(string $html)
    {
        $this->source = $html;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->filter(2);
    }

    public function getIdentificacao(): ?string
    {
        // TODO: Implement getIdentificacao() method.
    }

    public function getCNPJ(): ?string
    {
        return $this->filter(0);
    }

    public function getIE(): ?string
    {
        return $this->filter(1);
    }

    public function getLogradouro(): ?string
    {
        return $this->filter(3);
    }

    public function getBairro(): ?string
    {
        return $this->filter(6);
    }

    public function getNumero(): ?string
    {
        return $this->filter(4);
    }

    public function getMunicipio(): ?string
    {
        return $this->filter(7);
    }

    public function getComplemento(): ?string
    {
        return $this->filter(5);
    }

    public function getUF(): ?string
    {
        return $this->filter(8);
    }

    public function getTelefone(): ?string
    {
        return $this->filter(10);
    }

    public function getCEP(): ?string
    {
        return $this->filter(9);
    }

    public function getAtividadeEconomica(): ?string
    {
        return $this->filter(11);
    }

    public function getDataInicioAtividade(): ?string
    {
        return $this->filter(12);
    }

    public function getSituacaoCadastralVigente(): ?string
    {
        return $this->filter(13);
    }

    public function getDataSituacaoCadastral(): ?string
    {
        return $this->filter(14);
    }

    public function getRegimeDeApuracao(): ?string
    {
        return $this->filter(15);
    }

    public function jsonSerialize()
    {
        return [
            'cnpj' => $this->getCNPJ(),
            'ie' => $this->getIE(),
            'razaoSocial' => $this->getRazaoSocial(),
            'logradouro' => $this->getLogradouro(),
            'numero' => $this->getNumero(),
            'complemento' => $this->getComplemento(),
            'bairro' => $this->getBairro(),
            'municipio' => $this->getMunicipio(),
            'uf' => $this->getUF(),
            'cep' => $this->getCEP(),
            'telefone' => $this->getTelefone(),
            'atividadeEconomica' => $this->getAtividadeEconomica(),
            'dataDeInicioDeAtividade' => $this->getDataInicioAtividade(),
            'situacaoCadastralVigente' => $this->getSituacaoCadastralVigente(),
            'dataSituacaoCadastralVigente' => $this->getDataSituacaoCadastral(),
            'regimeDeApuracao' => $this->getRegimeDeApuracao()
        ];
    }


    /**
     * @param int $index
     * @return null|string
     */
    private function filter($index = null): ?string
    {
        preg_match_all('/<td .*class="valor".*>(.*)<\/td>/', $this->source, $matches);

        if (is_null($index) || !isset($matches[1][$index])) {
            return null;
        }

        return trim(str_replace('&nbsp;', '', $matches[1][$index]));
    }
}