<?php

namespace Sintegra\Test;

use PHPUnit\Framework\TestCase;
use Sintegra\Client;

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
        $this->assertEmpty($this->client->searchByCNPJ(31804115000243));
        $this->assertEmpty($this->client->searchByCNPJ('31804115000243'));
        $this->assertEmpty($this->client->searchByCNPJ('31.804.115-0002-43'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidCNPJ()
    {
        $this->assertEmpty($this->client->searchByCNPJ('invalid'));
    }
}