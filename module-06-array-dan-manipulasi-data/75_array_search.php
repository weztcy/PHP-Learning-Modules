<?php
// in_array() memeriksa apakah suatu nilai ada dalam array (mengembalikan boolean).
// array_search() mencari nilai dan mengembalikan kunci/indeksnya jika ditemukan.

$daftarKota = ["Jakarta", "Surabaya", "Medan", "Bandung", "Makassar"];

$cari = "Bandung";

// 1. Memeriksa keberadaan dengan in_array
if (in_array($cari, $daftarKota, true)) {
    echo "Kota {$cari} ada di dalam daftar.\n";
}

// 2. Mendapatkan posisi indeks dengan array_search
$posisi = array_search($cari, $daftarKota, true);
echo "Posisi indeks kota {$cari} adalah: {$posisi}\n";
