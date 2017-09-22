<?php

namespace Acme\Tests;

use Acme\Client;
use Acme\Parser;
use Mockery as m;
use Acme\GoldHistory;
use PHPUnit\Framework\TestCase;
class GoldHistoryTest extends TestCase
{
    public function test_get_html()  
    {  
        $client = m::mock(new Client);
        $parser = new Parser;
        $client->shouldReceive('get')->once()->andReturn(
            file_get_contents(__DIR__.'/gold-history.html')
        );  
        $goldHistory = new GoldHistory($client, $parser);
        $this->assertArraySubSet([
            ['date' => '2017/09/15', 'currency' => '新台幣 (TWD)', 'unit' => '1公克', 'buy' => '1272', 'sell' => '1288'],
            ['date' => '2017/09/14', 'currency' => '新台幣 (TWD)', 'unit' => '1公克', 'buy' => '1269', 'sell' => '1285'],
            ['date' => '2017/09/13', 'currency' => '新台幣 (TWD)', 'unit' => '1公克', 'buy' => '1276', 'sell' => '1292'],
        ], $goldHistory->get());
    }

    public function test_integation_testing()
    {
        $goldHistory = new GoldHistory();
        $items = $goldHistory->get();

        $this->assertInternalType('array', $items);
        foreach ($items as $item) {
            $this->assertArrayHasKey('date', $item);
            $this->assertArrayHasKey('currency', $item);
            $this->assertArrayHasKey('unit', $item);
            $this->assertArrayHasKey('buy', $item);
            $this->assertArrayHasKey('sell', $item);
        }
    }
} 