<?php

namespace Acme;

class GoldHistory
{
    public function __construct(Client $client) {
        $this->client = $client;
    }

    public function get() 
    {
        return $this->client->get();
    }
}