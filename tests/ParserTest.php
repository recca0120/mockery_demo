<?php

use Mockery as m;
use Recca0120\TaiwanBank\Parser;

class ParserTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function test_to_array()
    {
        $gold = m::mock('Recca0120\TaiwanBank\Gold');

        $parser = new Parser($gold);
        $parser->toArray();
    }
}
