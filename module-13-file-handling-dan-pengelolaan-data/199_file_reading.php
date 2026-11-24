<?php
// Membaca file baris demi baris menggunakan fopen(), fgets(), dan fclose().

$lokasi = __DIR__ . "/data_contoh.txt";
file_put_contents($lokasi, "Baris 1: Pengenalan File Handling\nBaris 2: Membaca data dengan aman\n");

$handle = fopen($lokasi, "r");
echo "=== Membaca Isi File ===\n";

if ($handle) {
    while (($baris = fgets($handle)) !== false) {
        echo $baris;
    }
    fclose($handle);
}
