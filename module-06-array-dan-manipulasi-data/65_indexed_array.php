<?php
// Indexed array menggunakan angka bulat sebagai indeks (dimulai dari indeks 0).

// Inisialisasi array dengan sintaks ringkas []
$warna = ["Merah", "Hijau", "Biru", "Kuning"];

echo "=== Indexed Array ===\n";
echo "Warna pertama (indeks 0): " . $warna[0] . "\n";
echo "Warna ketiga  (indeks 2): " . $warna[2] . "\n";
echo "Jumlah seluruh warna    : " . count($warna) . "\n";
