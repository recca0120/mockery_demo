<?php

namespace Acme\Tests;

use Acme\Client;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class MockeryTest extends TestCase
{
    public function test_fake() 
    {
        $client = new FakeClient;
 
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $client->get());
    }
} 
 
class FakeClient extends Client 
{
    public function get() 
    {
        return file_get_contents(__DIR__.'/gold-history.html');
    }
}