<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Piloterr\Client;

$client = new Client(); // reads PILOTERR_API_KEY
$response = $client->amazonProduct(['query' => 'B09DFCB66S']);
echo json_encode($response->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), "\n";
