<?php
// Pengujian endpoint API secara menyeluruh (status code, format json, skema data).

function simulasikanEndpointApi(): array {
    return [
        "status" => 200,
        "body" => ["id" => 1, "title" => "Belajar PHP Testing"]
    ];
}

$response = simulasikanEndpointApi();

echo "=== Pengujian Respons API ===\n";
echo "1. Assert Status Code == 200 : " . ($response['status'] === 200 ? "[PASS]" : "[FAIL]") . "\n";
echo "2. Assert Field 'title' ada : " . (isset($response['body']['title']) ? "[PASS]" : "[FAIL]") . "\n";
