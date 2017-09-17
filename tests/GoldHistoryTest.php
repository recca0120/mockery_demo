<?php

namespace Acme\Tests;

use Acme\Client;
use Acme\GoldHistory;
use PHPUnit\Framework\TestCase;

class GoldHistoryTest extends TestCase
{
    public function test_get_html() 
    {
        $client = new Client;
        $goldHistory = new GoldHistory($client);
 
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $goldHistory->get());
    }
} 