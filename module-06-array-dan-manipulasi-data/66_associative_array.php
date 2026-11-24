<?php
// Associative array menggunakan string sebagai kunci (key) untuk mengakses nilainya.

$buku = [
    "judul" => "Pemrograman PHP Modern",
    "penulis" => "Tim Pengembang",
    "tahun" => 2026,
    "harga" => 135000
];

echo "=== Associative Array (Data Buku) ===\n";
echo "Judul  : " . $buku["judul"] . "\n";
echo "Penulis: " . $buku["penulis"] . "\n";
echo "Tahun  : " . $buku["tahun"] . "\n";
echo "Harga  : Rp " . number_format($buku["harga"], 0, ',', '.') . "\n";
