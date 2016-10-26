<?php

use Mockery as m;
use Recca0120\TaiwanBank\Gold;

class GoldTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function test_get_data() {
        $httpClient = m::mock('Http\Client\HttpClient');
        $messageFactory = m::mock('Http\Message\MessageFactory');

        $messageFactory
            ->shouldReceive('createRequest')->with('GET', 'http://rate.bot.com.tw/gold/chart/year/TWD');

        $gold = new Gold($httpClient, $messageFactory);
        $html = $gold->getHtml();
    }
}
