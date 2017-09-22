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

- 使用 stub 來實作 test double
- 發現程式不好寫，先實作 Parser Class，用來分析網頁分容
    - 先準備好測試案例，並亮第一個紅燈
    - 完成 parseTbody 並準備第二個測試
    - 完成 parseRows 並準備第三個測試
    - 完成 parseCols
- 將 Parser 注入到 GoldHistory，並調整測試案例
- 完成程式碼
- 重構GoldHistory，讓可閱讀性提高
- 炫技的重構
- 新增 index.php 看看結果是否正確
- 注入太麻煩，那就給用預設值

## 驗收測試
實際測試程式是否正確，但由於我們抓取的是動態資料所以驗證方式改為
- 驗證回傳型態是否正確 assertInternalType
- 驗證回傳的 key 值是否正確
- 任何你想的到的驗證方式
