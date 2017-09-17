<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GoldHistoryTest extends TestCase
{
    public function test_index()
    {
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