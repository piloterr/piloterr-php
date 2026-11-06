<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Piloterr\Client;

$client = new Client(); // reads PILOTERR_API_KEY
try {
    $response = $client->request('GET', '/v1/usage');
    if ($response instanceof Piloterr\JsonResponse) {
        print_r($response->data);
    }
} catch (Piloterr\Exception\ApiException $exception) {
    fwrite(STDERR, sprintf("HTTP %d: %s\n", $exception->status, $exception->getMessage()));
}
