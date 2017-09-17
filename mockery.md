### 什麼是 Test Double（測試替身）

- Dummy  
    Objects are passed around but never actually used. Usually they are just used to fill parameter lists.
- Fake  
    Objects actually have working implementations, but usually take some shortcut which makes them not suitable for production.
- Stub
    Stub provide canned answers to calls made during the test.
- Mock
    Mocks are pre-programmed with expectations which form a specification of the calls they are expected to receive.
- Spy
    Spies are stubs that also record some information based on how they were called.


### Fake Test

```php
namespace Acme\Tests;

use Acme\Client;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class MockeryTest extends TestCase
{
    public function test_fake() 
    {
        $client = new FakeClient;
 
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $client->get());
    }
} 

class FakeClient extends Client 
{
    public function get() 
    {
        return file_get_contents(__DIR__.'/gold-history.html');
    }
}
```

### Stub Test

```php
namespace Acme\Tests;

use Acme\Client;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class MockeryTest extends TestCase
{
    public function test_stub() 
    {
        $client = m::mock(new Client);
        $client->shouldReceive('get')->andReturn(file_get_contents(__DIR__.'/gold-history.html'));
 
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $client->get());
    }
} 
```

### Stub Test 並測試傳入參數

```php
namespace Acme\Tests;

use Acme\Client;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class MockeryTest extends TestCase
{
    public function test_stub_with_arguments() 
    {
        $client = m::mock(new Client);
        $client->shouldReceive('get')->with('a', 'b')->andReturn(file_get_contents(__DIR__.'/gold-history.html'));
 
        $this->assertSame(file_get_contents(__DIR__.'/gold-history.html'), $client->get('a', 'b'));
    }
} 
```