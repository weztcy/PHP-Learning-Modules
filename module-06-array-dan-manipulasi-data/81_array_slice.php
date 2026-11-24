<?php
// array_slice() mengambil potongan elemen dari sebuah array tanpa memodifikasi array aslinya.

$huruf = ["A", "B", "C", "D", "E", "F", "G"];

// Mengambil 3 elemen mulai dari indeks ke-2
$potongan = array_slice($huruf, 2, 3);

echo "Array asli: " . implode(", ", $huruf) . "\n";
echo "Potongan (indeks 2, panjang 3): " . implode(", ", $potongan) . "\n";
