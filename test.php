<?php

use Recca0120\TaiwanBank\Gold;
use Http\Adapter\Guzzle6\Client;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Http\Message\CookieJar;
use Http\Client\Common\PluginClient;
use Http\Client\Common\Plugin\CookiePlugin;

require __DIR__.'/vendor/autoload.php';

$client = new Client();
$messageFactory = new GuzzleMessageFactory();

$cookiePlugin = new CookiePlugin(new CookieJar());
$pluginClient = new PluginClient(
    $client,
    [$cookiePlugin]
);

$gold = new Gold($pluginClient, $messageFactory);
echo $gold->getHtml();
