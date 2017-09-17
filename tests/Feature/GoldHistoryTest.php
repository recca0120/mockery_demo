<?php

namespace Tests\Feature;

use Acme\Client;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery as m;

class GoldHistoryTest extends TestCase
{
    public function test_index()
    {
        $client = m::mock(new Client);
        $client->shouldReceive('get')->once()->andReturn(
            file_get_contents(__DIR__.'/../../Acme/tests/gold-history.html')
        );
        $this->app->instance(Client::class, $client);

        $response = $this->get('/gold-history');

        $response->assertStatus(200);

        $response->assertJsonFragment([
            'date' => '2017/09/15',
            'currency' => '新台幣 (TWD)',
            'unit' => '1公克',
            'buy' => '1272',
            'sell' => '1288'
        ], [
            'date' => '2017/09/14',
            'currency' => '新台幣 (TWD)',
            'unit' => '1公克',
            'buy' => '1269',
            'sell' => '1285'
        ], [
            'date' => '2017/09/13',
            'currency' => '新台幣 (TWD)',
            'unit' => '1公克',
            'buy' => '1276',
            'sell' => '1292'
        ]);
    }
}