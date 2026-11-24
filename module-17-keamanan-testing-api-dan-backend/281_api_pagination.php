<?php
// Format respons pagination metadata pada API (data + meta links).

$dataHalaman = [
    "data" => [
        ["id" => 11, "judul" => "Posting 11"],
        ["id" => 12, "judul" => "Posting 12"]
    ],
    "meta" => [
        "halaman_saat_ini" => 2,
        "per_halaman" => 2,
        "total_data" => 10,
        "total_halaman" => 5
    ]
];

echo "=== Struktur Pagination API ===\n";
echo json_encode($dataHalaman, JSON_PRETTY_PRINT) . "\n";
