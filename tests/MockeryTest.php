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

    public function test_stub() 
    {
        $client = m::mock(new Client);
        $client->shouldReceive('get')->andReturn(file_get_contents(__DIR__.'/gold-history.html'));
 
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