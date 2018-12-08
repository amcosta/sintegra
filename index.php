<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \Sintegra\Client();
$result = $client->searchByCNPJ('31804115000243');

header('Content-type: application/json');

ob_clean();
echo json_encode($result);
ob_flush();