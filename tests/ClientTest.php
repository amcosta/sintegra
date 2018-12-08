<?php

namespace Sintegra\Test;

use PHPUnit\Framework\TestCase;
use Sintegra\Client;
use Sintegra\ResultInterface;

class ClientTest extends TestCase
{
    /**
     * @var Client
     */
    private $client;

    public function setUp()
    {
        $this->client = new Client();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(Client::class, $this->client);
    }

    public function testValidCNPJ()
    {
        $this->assertInstanceOf(ResultInterface::class, $this->client->searchByCNPJ(31804115000243));
        $this->assertInstanceOf(ResultInterface::class, $this->client->searchByCNPJ('31804115000243'));
        $this->assertInstanceOf(ResultInterface::class, $this->client->searchByCNPJ('31.804.115-0002-43'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidCNPJ()
    {
        $this->assertInstanceOf(ResultInterface::class, $this->client->searchByCNPJ('invalid'));
    }
}