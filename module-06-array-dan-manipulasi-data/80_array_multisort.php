<?php
// array_multisort() digunakan untuk mengurutkan beberapa array sekaligus atau array multidimensi.

$produk = [
    ["nama" => "Monitor", "harga" => 2500000],
    ["nama" => "Mouse",   "harga" => 150000],
    ["nama" => "Laptop",  "harga" => 8500000],
    ["nama" => "Keyboard","harga" => 450000]
];

// Mengambil kolom harga sebagai dasar pengurutan
$kolomHarga = array_column($produk, 'harga');

// Mengurutkan produk berdasarkan harga secara menaik (SORT_ASC)
array_multisort($kolomHarga, SORT_ASC, $produk);

echo "=== Produk Diurutkan Berdasarkan Harga Termurah ===\n";
foreach ($produk as $item) {
    echo "- {$item['nama']} : Rp " . number_format($item['harga'], 0, ',', '.') . "\n";
}
