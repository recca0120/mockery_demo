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
- 完成第一個測試
- 現在我們不希望一直抓取網頁，所以我們開始第一次重構
- 將抓取網頁的程式重構到 Client.php
- 補上 Client.php 的測試
- 安裝 mockery 方便我們撰寫 test double

```bash
composer require mockery/mockery --dev
```