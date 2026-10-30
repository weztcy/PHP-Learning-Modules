<?php
// Pernyataan if mengeksekusi blok kode hanya jika kondisi yang diuji bernilai true.

$kecepatan = 85;
$batasKecepatan = 80;

echo "Kecepatan kendaraan: {$kecepatan} km/jam\n";

if ($kecepatan > $batasKecepatan) {
    // Blok ini hanya berjalan jika kecepatan melebihi batas yang diizinkan
    echo "Peringatan: Anda melebihi batas kecepatan maksimal! Harap perlambat kendaraan.\n";
}

echo "Pemeriksaan kecepatan selesai.\n";
