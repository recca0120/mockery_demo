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
        $tbody = $this->parser->parseTbody($this->client->get());

        $results = [];
        foreach ($this->parser->parseRows($tbody) as $row) {
            $results[] = $this->parser->parseCols($row);
        }

        return $results;
    }
}