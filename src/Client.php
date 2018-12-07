<?php

namespace Sintegra;

use Respect\Validation\Validator as v;

class Client
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function searchByCNPJ(string $cnpj)
    {
        if (!v::cnpj()->validate($cnpj)) {
            throw new \InvalidArgumentException(sprintf('O CNPJ informado "%s" não é valido', $cnpj));
        }

        return $this->makeRequest();
    }

    private function makeRequest()
    {
//        $this->client->request('POST', 'http://www.sintegra.es.gov.br/resultado.php');
    }
}