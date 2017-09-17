<?php

require __DIR__ . '/vendor/autoload.php';

use Acme\GoldHistory;

$goldHistory = new GoldHistory();

var_dump($goldHistory->get());