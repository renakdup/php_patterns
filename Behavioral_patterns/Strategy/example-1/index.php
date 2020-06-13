<?php
// Client

$fileConnector = new FileConnector('example.txt');
$client = new ContextClass($fileConnector);
echo $client->prosess(); // file connector length

$urlConnector = new UrlConnector('http://example.com');
$client = new ContextClass($urlConnector);
echo $client->prosess(); // url connector length

/**
 * Можно переопределить инкапсулируемый алгоритм через setter
 */
$client->setStrategy($fileConnector);
echo $client->prosess(); // file connector length
