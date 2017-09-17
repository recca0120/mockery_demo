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
}
