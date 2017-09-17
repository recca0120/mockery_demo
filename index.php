<?php

require __DIR__.'/vendor/autoload.php';

use Acme\Client;
use Acme\Parser;
use Acme\GoldHistory;

$goldHistory = new GoldHistory(new Client, new Parser);

header('content-type: application/json');
echo json_encode($goldHistory->get());