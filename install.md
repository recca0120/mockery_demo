### 安裝 PHPUnit

```bash
composer require phpunit/phpunit --dev
```

### 建立設定檔

```bash
vendor/bin/phpunit --generate-configuration
```

#### 設定畫面（全部使用預設值即可）
```bash
PHPUnit 6.3.0 by Sebastian Bergmann and contributors.

Generating phpunit.xml in C:\Users\recca\UniServerZ\www\mockery_demo

Bootstrap script (relative to path shown above; default: vendor/autoload.php):
Tests directory (relative to path shown above; default: tests):
Source directory (relative to path shown above; default: src):

Generated phpunit.xml in C:\Users\recca\UniServerZ\www\mockery_demo
```

### 新增 tests, src 資料夾


### 增加 psr-4

修改 `composer.json`

```json
{
    "autoload": {
        "psr-4": {
            "Acme\\": "src/"
        }
    }
}
```

執行 
```bash
composer dump-autoload
```