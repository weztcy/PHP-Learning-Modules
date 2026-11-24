<?php
// Variabel dalam PHP diawali dengan karakter simbol dolar ($).
// PHP adalah bahasa dynamically typed, tipe data ditentukan secara otomatis saat runtime.

$namaLengkap = "Ahmad Dahlan";
$umur = 25;
$ipk = 3.85;
$isAktif = true;

echo "=== Data Mahasiswa ===\n";
echo "Nama  : {$namaLengkap}\n";
echo "Umur  : {$umur} tahun\n";
echo "IPK   : {$ipk}\n";
echo "Status: " . ($isAktif ? "Aktif" : "Tidak Aktif") . "\n";
