<?php
// json_encode() mengubah data PHP (array atau objek) menjadi format string JSON.

$dataKaryawan = [
    "status" => "success",
    "total" => 2,
    "items" => [
        ["id" => 1, "nama" => "Farida", "divisi" => "Engineering"],
        ["id" => 2, "nama" => "Dimas", "divisi" => "Product"]
    ]
];

$jsonOutput = json_encode($dataKaryawan, JSON_PRETTY_PRINT);
echo "=== Output JSON Terformat ===\n";
echo $jsonOutput . "\n";
