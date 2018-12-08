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

    public function searchByCNPJ(string $cnpj): ResultInterface
    {
        if (!v::cnpj()->validate($cnpj)) {
            throw new \InvalidArgumentException(sprintf('O CNPJ informado "%s" não é valido', $cnpj));
        }

        return $this->makeRequest(['num_cnpj' => $cnpj]);
    }

    private function makeRequest(array $params): ResultInterface
    {
        $params['botao'] = 'Consultar';

        $response = $this->client->request(
            'POST',
            'http://www.sintegra.es.gov.br/resultado.php',
            ['form_params' => $params]
        );

        return new Result($response->getBody());
    }
}