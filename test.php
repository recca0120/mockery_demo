<?php

use Recca0120\TaiwanBank\Gold;
use Recca0120\TaiwanBank\Parser;
use Http\Adapter\Guzzle6\Client;
use Http\Message\MessageFactory\GuzzleMessageFactory;

require __DIR__.'/vendor/autoload.php';

$client = new Client();
$messageFactory = new GuzzleMessageFactory();

$gold = new Gold($client, $messageFactory);
$parser = new Parser($gold);

header('content-type: application/json');

echo json_encode($parser->toArray());
