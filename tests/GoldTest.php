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
        $request = m::mock('Psr\Http\Message\RequestInterface');
        $response = m::mock('Psr\Http\Message\ResponseInterface');

        $messageFactory
            ->shouldReceive('createRequest')
            ->with('GET', 'http://rate.bot.com.tw/gold/chart/year/TWD')
            ->andReturn($request);

        $request
            ->shouldReceive('hasHeader')
            ->with('Accept-Language')
            ->andReturn(false)

            ->shouldReceive('withHeader')
            ->with('Accept-Language', 'zh-TW,zh;q=0.8,en-US;q=0.6,en;q=0.4')
            ->andReturn($request);

        $httpClient
            ->shouldReceive('sendRequest')
            ->with($request)
            ->andReturn($response);

        $response
            ->shouldReceive('getBody->getContents')
            ->andReturn('fooHtml');

        $gold = new Gold($httpClient, $messageFactory);
        $html = $gold->getHtml();

        $this->assertSame('fooHtml', $html);
    }
}
