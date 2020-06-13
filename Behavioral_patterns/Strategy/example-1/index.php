<?php

$fileConnector = new FileConnector('example.txt');
$client = new ClientClass($fileConnector);
echo $client->prosess(); // file connector length

$urlConnector = new UrlConnector('http://example.com');
$client = new ClientClass($urlConnector);
echo $client->prosess(); // url connector length

/**
 * Можно переопределить инкапсулируемый алгоритм через setter
 */
$client->setStrategy($fileConnector);
echo $client->prosess(); // file connector length
