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
        return array_map(function($row) {
            return $this->parser->parseCols($row);
        }, $this->parser->parseRows(
            $this->parser->parseTbody($this->client->get())
        ));
    }
}