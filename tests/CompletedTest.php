<?php

use Mockery as m;
use Recca0120\TaiwanBank\Gold;
use Recca0120\TaiwanBank\Parser;
use Http\Adapter\Guzzle6\Client;
use Http\Message\MessageFactory\GuzzleMessageFactory;

class CompletedTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function test_full_test() {
        $client = new Client();
        $messageFactory = new GuzzleMessageFactory();

        $gold = new Gold($client, $messageFactory);
        $parser = new Parser($gold);

        $this->assertTrue(is_array($parser->toArray()));
    }
}
