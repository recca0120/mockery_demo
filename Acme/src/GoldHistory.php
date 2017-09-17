<?php

namespace Acme;

class GoldHistory
{
    public function __construct(Client $client = null, Parser $parser = null) {
        $this->client = $client ?: new Client;
        $this->parser = $parser ?: new Parser;
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