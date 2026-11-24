<?php
// Program pemeriksaan bilangan genap atau ganjil menggunakan operator modulus (%).
// Bilangan genap memiliki sisa bagi 0 saat dibagi 2.

$kumpulanAngka = [7, 12, 25, 30, 41, 58];

echo "=== Pemeriksaan Bilangan Genap dan Ganjil ===\n";
foreach ($kumpulanAngka as $angka) {
    // Evaluasi modulus 2
    if ($angka % 2 === 0) {
        echo "Angka {$angka} adalah GENAP\n";
    } else {
        echo "Angka {$angka} adalah GANJIL\n";
    }
}
