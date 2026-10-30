<?php
// Pengelolaan tanggal dan waktu menggunakan class DateTime bawaan PHP.

$sekarang = new DateTime();

echo "Tanggal & Waktu Saat Ini : " . $sekarang->format("Y-m-d H:i:s") . "\n";
echo "Format Indonesia         : " . $sekarang->format("d F Y") . "\n";

// Menambahkan 7 hari ke depan
$sekarang->modify("+7 days");
echo "Tujuh hari kemudian      : " . $sekarang->format("Y-m-d") . "\n";
