### assertion 斷言


### assertTrue

```php
use PHPUnit\Framework\TestCase;

class AssertionsTest extends TestCase 
{
    public function test_assert_true() 
    {
        $actual = false;

        $this->assertTrue($actual);
    }
}
```

### assertFalse

```php
use PHPUnit\Framework\TestCase;

class AssertionsTest extends TestCase 
{
    public function test_assert_false() 
    {
        $actual = false;

        $this->assertFalse($actual);
    }
}
```

### assertEquals

```php
use PHPUnit\Framework\TestCase;

class AssertionsTest extends TestCase 
{
    public function test_assert_equals() 
    {
        $expected = true;
        $actual = true;
        
        $this->assertEquals($expected, $actual);
    }
}
```