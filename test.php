<?php

use Recca0120\TaiwanBank\Gold;
use Http\Adapter\Guzzle6\Client;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Http\Message\CookieJar;
use Http\Client\Common\PluginClient;
use Http\Client\Common\Plugin\CookiePlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;

require __DIR__.'/vendor/autoload.php';

$client = new Client();
$messageFactory = new GuzzleMessageFactory();

$headerDefaultsPlugin = new HeaderDefaultsPlugin([
    'Accept-Language' => 'zh-TW,zh;q=0.8,en-US;q=0.6,en;q=0.4',
]);

$pluginClient = new PluginClient(
    $client, [$headerDefaultsPlugin]
);

$gold = new Gold($pluginClient, $messageFactory);
echo $gold->getHtml();
