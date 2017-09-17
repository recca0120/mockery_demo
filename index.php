<?php

require __DIR__ . '/vendor/autoload.php';

use Acme\GoldHistory;

$goldHistory = new GoldHistory();

header('content-type: application/json');
echo json_encode($goldHistory->get());