<?php
// array_map() menerapkan fungsi callback ke setiap elemen array dan mengembalikan array baru.

$hargaAwal = [10000, 25000, 50000];

// Memberikan PPN 11% ke setiap barang
$hargaSetelahPajak = array_map(function (int $harga): float {
    return $harga * 1.11;
}, $hargaAwal);

echo "=== Hasil Transformasi array_map() ===\n";
foreach ($hargaAwal as $i => $awal) {
    echo "Rp {$awal} -> Rp " . number_format($hargaSetelahPajak[$i], 2, ',', '.') . "\n";
}
