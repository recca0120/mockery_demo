<?php

namespace Acme\Tests;

use Acme\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function test_get_html() 
    { 
        $client = new Client; 
        
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $client->get()); 
    }
}