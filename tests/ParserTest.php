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

        return $rows[0];
    }

    /**
     * @depends test_parse_rows
     *
     */
    public function test_parse_cols($row) 
    {
        $parser = new Parser;
         
        $this->assertSame([
            'date' => '2017/09/15',
            'currency' => '新台幣 (TWD)',
            'unit' => '1公克',
            'buy' => '1272',
            'sell' => '1288',
        ], $parser->parseCols($row));
    }
} 