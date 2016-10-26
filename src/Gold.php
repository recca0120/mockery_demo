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
    }
}
