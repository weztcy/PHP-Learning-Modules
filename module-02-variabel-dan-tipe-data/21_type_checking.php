<?php
// PHP menyediakan berbagai fungsi bawaan untuk memeriksa tipe data variabel (is_* functions).

$dataUji = [
    "angka" => 123,
    "pecahan" => 45.67,
    "teks" => "PHP",
    "boolean" => true,
    "daftar" => [1, 2, 3],
    "kosong" => null
];

echo "=== Pemeriksaan Tipe Data (Type Checking) ===\n";
foreach ($dataUji as $kunci => $nilai) {
    echo "Kunci '{$kunci}' berjenis: " . gettype($nilai) . "\n";
}

echo "Apakah 'angka' is_int()? " . (is_int($dataUji['angka']) ? "Ya" : "Tidak") . "\n";
echo "Apakah 'teks' is_string()? " . (is_string($dataUji['teks']) ? "Ya" : "Tidak") . "\n";
echo "Apakah 'daftar' is_array()? " . (is_array($dataUji['daftar']) ? "Ya" : "Tidak") . "\n";
