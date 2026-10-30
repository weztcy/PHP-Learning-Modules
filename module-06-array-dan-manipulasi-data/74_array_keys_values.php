<?php
// array_keys() mengembalikan seluruh kunci (key) dari sebuah array.
// array_values() mengembalikan seluruh nilai (value) dari sebuah array dengan indeks terurut ulang.

$stokBarang = [
    "Laptop" => 15,
    "Mouse" => 50,
    "Keyboard" => 35
];

$daftarProduk = array_keys($stokBarang);
$daftarJumlah = array_values($stokBarang);

echo "Daftar Nama Produk (keys)  : " . implode(", ", $daftarProduk) . "\n";
echo "Daftar Jumlah Stok (values): " . implode(", ", $daftarJumlah) . "\n";
