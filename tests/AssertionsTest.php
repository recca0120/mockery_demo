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

    public function test_assert_contains_array()
    {
        $needle = 3;
        
        $this->assertContains($needle, [1, 3, 5, 7, 9]);
    }

    public function test_assert_contains_string()
    {
        $needle = 'oba';
        
        $this->assertContains($needle, 'foobar');
    }
    
    public function test_assert_count() 
    {
        $this->assertCount(5, [1, 3, 5, 7, 9]);
    }

    public function test_assert_array_has_key() 
    {
        $this->assertArrayHasKey('bar', ['bar' => 'baz']);
    }

    public function test_assert_array_subset()
    {
        $this->assertArraySubset(['config' => ['key-a']], ['config' => ['key-a', 'key-c']]);
    }

    public function test_assert_internal_type()
    {
        $this->assertInternalType('numeric', 1);
        $this->assertInternalType('numeric', 1.0);
        $this->assertInternalType('int', 1);
        $this->assertInternalType('float', 1.0);
        $this->assertInternalType('string', '1');
    }
}
