<?php
// PHP memiliki dua operator khusus string:
// 1. Titik (.) untuk konkatenasi (penggabungan string)
// 2. Titik-sama-dengan (.=) untuk penugasan konkatenasi

$salam = "Selamat";
$waktu = "Pagi";

// Menggabungkan string dengan operator titik
$pesanLengkap = $salam . " " . $waktu . "!";
echo $pesanLengkap . "\n";

// Menambahkan teks baru ke variabel menggunakan .=
$pesanLengkap .= " Selamat datang di kelas PHP.";
echo $pesanLengkap . "\n";
