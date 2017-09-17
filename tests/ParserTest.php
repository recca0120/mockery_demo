<?php

namespace Acme\Tests;

use Acme\Parser;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{ 
    public function test_parse_tbody()
    { 
        $html = file_get_contents(__DIR__.'/gold-history.html');
        $parser = new Parser; 
        
        $tbody = $parser->parseTbody($html);
        $this->assertContains('<tbody>', $tbody);
        $this->assertContains('</tbody>', $tbody);

        return $tbody;
    } 
} 