<?php

namespace Acme\Tests;

use Acme\GoldHistory;
use PHPUnit\Framework\TestCase;

class GoldHistoryTest extends TestCase
{
    public function test_get_html() 
    {
        $goldHistory = new GoldHistory();
 
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $goldHistory->get());
    }
}