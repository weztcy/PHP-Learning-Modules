<?php
// json_decode() membaca string JSON menjadi objek stdClass atau array asosiatif (jika parameter kedua true).

$jsonString = '{"judul": "Modul PHP", "versi": "8.3", "aktif": true}';

$dataArray = json_decode($jsonString, true);

echo "Judul : " . $dataArray["judul"] . "\n";
echo "Versi : " . $dataArray["versi"] . "\n";
echo "Status: " . ($dataArray["aktif"] ? "Aktif" : "Non-Aktif") . "\n";
