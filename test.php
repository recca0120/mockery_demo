<?php

use Recca0120\TaiwanBank\Gold;
use Http\Adapter\Guzzle6\Client;
use Http\Message\MessageFactory\GuzzleMessageFactory;

require __DIR__.'/vendor/autoload.php';

$client = new Client();
$messageFactory = new GuzzleMessageFactory();

$gold = new Gold($client, $messageFactory);
echo $gold->getHtml();
