- 新增 autoload-dev psr-4

修改 `composer.json`

```json
{
    "require-dev": {
        "phpunit/phpunit": "^6.3"
    },
    "autoload": {
        "psr-4": {
            "Acme\\": "src/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Acme\\Tests\\": "tests/"
        }
    }
}
```

執行

```bash
composer dump-autoload
```

- 準備好測試案例，並使測試亮第一個紅燈