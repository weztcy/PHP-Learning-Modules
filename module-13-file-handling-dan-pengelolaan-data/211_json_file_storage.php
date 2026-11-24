<?php
// Menyimpan, memperbarui, dan membaca data aplikasi dalam bentuk file JSON.

$fileStorage = __DIR__ . "/database_sederhana.json";

// Data awal
$database = [
    "pengguna" => [
        ["id" => 1, "nama" => "Kiki", "poin" => 100]
    ]
];

// Menambah data baru
$database["pengguna"][] = ["id" => 2, "nama" => "Lia", "poin" => 150];

// Menyimpan ke file
file_put_contents($fileStorage, json_encode($database, JSON_PRETTY_PRINT));
echo "Data JSON berhasil diperbarui:\n" . file_get_contents($fileStorage) . "\n";
