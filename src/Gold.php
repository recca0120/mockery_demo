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
        // 建立 Psr\Http\Message\RequestInterface，並得到綠燈
        $request = $this->messageFactory->createRequest('GET', 'http://rate.bot.com.tw/gold/chart/year/TWD');
        // 送出Request回傳 Psr\Http\Message\ResponseInterface，並得到第二個綠燈
        $response = $this->httpClient->sendRequest($request);

        // 直接取得html，並得到第三個紅燈
        return $response->getBody()->getContents();
    }
}
