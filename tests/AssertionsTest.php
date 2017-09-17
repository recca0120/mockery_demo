<?php

use PHPUnit\Framework\TestCase;

class AssertionsTest extends TestCase
{
    public function test_assert_true()
    {   
        $actual = true;

        $this->assertTrue($actual);
    }
    

    public function test_assert_false()
    {   
        $actual = false;

        $this->assertFalse($actual);
    }

    public function test_assert_equals() 
    {
        $expected = true;
        $actual = true;
        
        $this->assertEquals($expected, $actual);
    }

    public function test_assert_same() 
    {
        $expected = true;
        $actual = true;
        
        $this->assertSame($expected, $actual);
    }

    public function test_assert_equals_do_not_check_type() 
    {
        $expected = true;
        $actual = 1;
        
        $this->assertEquals($expected, $actual);
    }

    // 紅燈
    public function test_assert_equals_check_type() 
    {
        $expected = true;
        $actual = 1;
        
        $this->assertSame($expected, $actual);
    }
}
