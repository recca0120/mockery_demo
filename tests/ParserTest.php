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

    /**
     * @depends test_parse_tbody
     *
     */
    public function test_parse_rows($tbody) 
    {
        $parser = new Parser;
         
        $rows = $parser->parseRows($tbody);
 
        foreach ($rows as $row) {
            $this->assertContains('<tr>', $row);
            $this->assertContains('</tr>', $row);
        }
    }
} 