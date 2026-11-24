<?php
// var_dump() dan print_r() mencetak rincian tipe data dan struktur variabel untuk keperluan debugging.

$dataUji = [
    "id" => 101,
    "nama" => "Fajar",
    "status" => true,
    "skor" => [85.5, 90.0]
];

echo "=== Output var_dump() ===\n";
var_dump($dataUji);

echo "\n=== Output print_r() ===\n";
print_r($dataUji);
