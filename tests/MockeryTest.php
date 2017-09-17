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

    public function test_stub_with_arguments() 
    {
        $client = m::mock(new Client);
        $client->shouldReceive('get')->with('a', 'b')->andReturn(file_get_contents(__DIR__.'/gold-history.html'));
 
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $client->get('a', 'b'));
    }

    public function test_stub_with_times_and_arguments() 
    {
        $client = m::mock(new Client);
        $client->shouldReceive('get')->once()->with('a', 'b')->andReturn(file_get_contents(__DIR__.'/gold-history.html'));
 
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $client->get('a', 'b'));

        $client->shouldReceive('get')->times(3)->with('c', 'd')->andReturn(file_get_contents(__DIR__.'/gold-history.html'));
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $client->get('a', 'b'));
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $client->get('a', 'b'));
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $client->get('a', 'b'));
    }

    public function test_mock() 
    {
        $client = m::mock(Client::class);
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