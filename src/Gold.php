<?php

namespace Recca0120\TaiwanBank;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;

class Gold {
    public function __construct(HttpClient $httpClient, MessageFactory $messageFactory) {
        $this->httpClient = $httpClient;
        $this->messageFactory = $messageFactory;
    }

    public function getHtml() {
        // 建立 Psr\Http\Message\RequestInterface，並得到紅燈
        $request = $this->messageFactory->createRequest('GET', 'http://rate.bot.com.tw/gold/chart/year/TWD');
    }
}
