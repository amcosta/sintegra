<?php

namespace Sintegra\Test;

use PHPUnit\Framework\TestCase;
use Sintegra\Result;
use Sintegra\ResultInterface;

class ResultTest extends TestCase
{
    /**
     * @var ResultInterface
     */
    private $result;

    public function setUp()
    {
        $this->result = new Result(file_get_contents(__DIR__ . '/data/result.html'));
    }

    public function testInstance()
    {
        $this->assertInstanceOf(ResultInterface::class, $this->result);
    }

    public function testGetCNPJ()
    {
        $this->assertEquals('31.804.115/0002-43', $this->result->getCNPJ());
    }

    public function testGetRazaoSocial()
    {
        $this->assertEquals('CEREAIS DO NICO LTDA', $this->result->getRazaoSocial());
    }

    public function testGetIE()
    {
        $this->assertEquals('082.254.28-1', $this->result->getIE());
    }

    public function testGetLogradouro()
    {
        $this->assertEquals('RUA IPE', $this->result->getLogradouro());
    }

    public function testGetNumero()
    {
        $this->assertEquals('10', $this->result->getNumero());
    }

    public function testGetComplemento()
    {
        $this->assertEquals('', $this->result->getComplemento());
    }

    public function testGetBairro()
    {
        $this->assertEquals('MOVELAR', $this->result->getBairro());
    }

    public function testGetMunicipio()
    {
        $this->assertEquals('LINHARES', $this->result->getMunicipio());
    }

    public function testGetUF()
    {
        $this->assertEquals('ES', $this->result->getUF());
    }

    public function testGetAtividadeEconomica()
    {
        $this->assertEquals('COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS', $this->result->getAtividadeEconomica());
    }

    public function testGetDataInicioAtividadeEconomica()
    {
        $this->assertEquals('26/03/2004', $this->result->getDataInicioAtividade());
    }

    public function testGetSituacaoCadastralVigente()
    {
        $this->assertEquals('HABILITADO', $this->result->getSituacaoCadastralVigente());
    }

    public function testGetDataSituacaoCadastralVigente()
    {
        $this->assertEquals('26/03/2004', $this->result->getDataSituacaoCadastral());
    }

    public function testGetRegimeDeApuracao()
    {
        $this->assertEquals('ORDINARIO', $this->result->getRegimeDeApuracao());
    }

    public function testJson()
    {
        $this->assertJson('{
            "cnpj": "31.804.115/0002-43",
            "ie": "082.254.28-1",
            "razaoSocial": "CEREAIS DO NICO LTDA",
            "logradouro": "RUA IPE",
            "numero": "10",
            "complemento": "",
            "bairro": "MOVELAR",
            "municipio": "LINHARES",
            "uf": "ES",
            "cep": "29906-120",
            "telefone": "",
            "atividadeEconomica": "COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS",
            "dataDeInicioDeAtividade": "26/03/2004",
            "situacaoCadastralVigente": "HABILITADO",
            "dataSituacaoCadastralVigente": "26/03/2004",
            "regimeDeApuracao": "ORDINARIO"
        }', json_encode($this->result));
    }
}