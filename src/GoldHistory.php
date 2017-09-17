<?php

namespace Acme;

class GoldHistory
{
    public function __construct(Client $client, Parser $parser) {
        $this->client = $client;
        $this->parser = $parser;
    }

    public function get() 
    {
        return $this->client->get();
    }
}