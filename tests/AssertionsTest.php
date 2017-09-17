<?php

use PHPUnit\Framework\TestCase;

class AssertionsTest extends TestCase
{
    public function test_assert_true()
    {   
        $actual = true;

        $this->assertTrue($actual);
    }
}
