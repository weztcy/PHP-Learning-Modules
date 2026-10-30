<?php
// Pernyataan break digunakan untuk menghentikan paksa perulangan saat suatu kondisi terpenuhi.

$targetPencarian = 7;
$kumpulanAngka = [2, 4, 6, 7, 10, 15];

echo "=== Demonstrasi Pernyataan Break ===\n";

foreach ($kumpulanAngka as $angka) {
    echo "Memeriksa angka: {$angka}\n";
    
    if ($angka === $targetPencarian) {
        echo ">> Angka {$targetPencarian} ditemukan! Menghentikan pencarian dengan break.\n";
        break; // Keluar dari loop saat elemen target ditemukan
    }
}
