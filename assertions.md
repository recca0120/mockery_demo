### assertion 斷言


### assertTrue

```php
use PHPUnit\Framework\TestCase;

class AssertionsTest extends TestCase {

    public function test_assert_true() 
    {
        $actual = false;

        $this->assertTrue($actual);
    }
}
```