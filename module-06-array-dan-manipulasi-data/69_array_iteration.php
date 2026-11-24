<?php
// Iterasi array dapat dilakukan dengan for loop berdasarkan indeks, atau menggunakan foreach.

$provinsi = ["Jawa Barat", "Jawa Tengah", "Jawa Timur", "Bali"];

echo "=== Iterasi dengan Foreach ===\n";
foreach ($provinsi as $posisi => $namaProvinsi) {
    $nomor = $posisi + 1;
    echo "{$nomor}. {$namaProvinsi}\n";
}
