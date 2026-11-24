<?php
// substr() memotong dan mengambil bagian string berdasarkan indeks awal dan panjang karakter.

$kodeTransaksi = "TRX-20261018-099";

// Mengambil 3 karakter pertama
$prefix = substr($kodeTransaksi, 0, 3);

// Mengambil tanggal (8 karakter mulai dari indeks 4)
$tanggal = substr($kodeTransaksi, 4, 8);

echo "Kode Lengkap: {$kodeTransaksi}\n";
echo "Prefix      : {$prefix}\n";
echo "Tanggal     : {$tanggal}\n";
