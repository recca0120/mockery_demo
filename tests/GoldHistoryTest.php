<?php

namespace Acme\Tests;

use Acme\Client;
use Mockery as m;
use Acme\GoldHistory;
use PHPUnit\Framework\TestCase;
class GoldHistoryTest extends TestCase
{
    public function test_get_html() 
    {
        $client = m::mock(new Client);
        $client->shouldReceive('get')->once()->andReturn(
            file_get_contents(__DIR__.'/gold-history.html')
        );
        $goldHistory = new GoldHistory($client);
 
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $goldHistory->get());
    }
} 