<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Piloterr\Client;

$client = new Client(); // reads PILOTERR_API_KEY
$response = $client->websiteScreenshot(['url' => 'https://example.com']);
if ($response instanceof Piloterr\BinaryResponse) {
    $response->save('screenshot.png');
    echo 'Saved screenshot.png (', $response->contentType, ', ', \strlen($response->bytes), " bytes)\n";
} else {
    print_r($response->data);
}
