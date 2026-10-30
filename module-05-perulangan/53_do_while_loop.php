<?php
// Perulangan do-while mengeksekusi blok kode minimal satu kali sebelum kondisi diuji di akhir blok.

$percobaan = 1;
$maxPercobaan = 3;

echo "=== Perulangan Do-While (Simulasi Koneksi Jaringan) ===\n";

do {
    echo "Mencoba menghubungkan ke server (Percobaan #{$percobaan})...\n";
    $percobaan++;
} while ($percobaan <= $maxPercobaan);

echo "Batas percobaan maksimal tercapai.\n";
